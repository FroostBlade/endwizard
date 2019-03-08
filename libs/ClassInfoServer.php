<?php
	class InfoServer {
		private $Socket,
				$to;
				
		public $Online, 
			   $MOTD, 
			   $CurPlayers, 
			   $MaxPlayers, 
			   $IP, 
			   $Port, 
			   $Error;
		
		public function __construct($IP, $Port = '25565', $timeout='0.8'){
			$this->IP = $IP;
			$this->Port = $Port;
			$this->to = $timeout;
			
			if(preg_match('/(.*):\/\//', $this->IP)){
				$this->IP = preg_replace('/(.*):\/\//', '', $this->IP);
			}
			
			if(strpos($this->IP, '/') !== false){
				$this->IP = rtrim($this->IP, '/');
				
				if(strpos($this->IP, '/') !== false){
					$this->Failed();
					$this->Error = 'Неправильно написан адрес сервера';
					return;
				}
			}
			
			if(preg_match_all('/:/', $this->IP, $matches) > 1){
				unset($matches);
				
				if(strpos($this->IP, '[') === false && strpos($this->IP, ']') === false)
					$this->IP = '['.$this->IP.']';
				
			} else if(strpos($this->IP, ':') !== false){
				$this->Failed();
				$this->Error = 'Некорректный формат домена';
				return;
			}
			
			if($this->Socket = @stream_socket_client('tcp://'.$this->IP.':'.$Port, $ErrNo, $ErrStr, $this->to)){
				
				if(strpos($this->IP, '[') === 0 && strpos($this->IP, ']')===(strlen($this->IP)-1))
					$this->IP=trim($this->IP, '[]');
				
				$this->Online=true;
				fwrite($this->Socket, "\xfe");
				$Handle = fread($this->Socket, 8192);
				$Handle = substr($Handle, 1);
				
				if(strpos($Handle,"\x00\x00")!=0){
					$Handle = explode("\x00\x00",$Handle);
					$Handle = str_replace("\x00", '', $Handle);
					$this->MOTD=$Handle[3];
					$this->CurPlayers=$Handle[4];
					$this->MaxPlayers=$Handle[5];
					$this->Error=false;
				} else {
					$Handle=explode("\xa7", $Handle);
					$Handle=str_replace("\x00", '', $Handle);
					$this->MOTD=$Handle[0];
					$this->CurPlayers = $Handle[1];
					$this->MaxPlayers=$Handle[2];
					$this->Error=false;
				}
				
				unset($Handle);
				fclose($this->Socket);
			} else {
				$this->Online = false;
				$this->Failed();
				$this->Error='Не удалось получить инфо';
			}
		}
		
		public function Info(){
			return array('Status'=>$this->Online,
						 'MOTD'=>$this->MOTD,
						 'CurPlayers'=>$this->CurPlayers,
						 'MaxPlayers'=>$this->MaxPlayers);
		}
		
		private function Failed(){
			$this->MOTD = 'No Connect';
			$this->CurPlayers = '0';
			$this->MaxPlayers = '0';
		}
	}
?>