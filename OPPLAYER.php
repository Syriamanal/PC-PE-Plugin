<?php
/*
__PocketMine Plugin__
name:OP,Player
description=구분합니다
version=0.1.1
author=Betta_Fish
class=OP
apiversion=11
*/

class OP implements Plugin{
	private $api;
	
	public function __construct(ServerAPI $api, $server = false){
		$this->api = $api;
	}
	
	public function init(){
		$this->api->addHandler("player.chat", array($this, "handler"));
	}
	
	public function __destruct(){}
	
	public function handler(){
		$player = $data["player"]; 
		if($this->api->isOp(player){ 
			$this->api->chat->broadcast("[Admin.]".$data["player"]->username." | ".$data["message"]);
		}else{
			$this->api->chat->broadcast("[Player]".$data["player"]->username." | ".$data["message"]);
		}
		return false:
	}
}
?>
		
