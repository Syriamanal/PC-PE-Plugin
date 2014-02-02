<?php
/*
__PocketMine Plugin__
name:Mars
description=리무의 이름을 말할시 운지(하지만 제작자는 언급해도 안전는 구라)
version=0.1.1
author=Betta_Fish
class=OWNNJI
apiversion=11
*/

class OWNNJI implements Plugin{
	private $api;
	
	public function __construct(ServerAPI $api, $server = false){
		$this->api = $api;
	}
	
	public function init(){
		$this->api->addHandler("player.chat", array($this, "handler"));
	}
	
	public function __destruct(){}
	
	public function handler($data, $event){
		switch ($event){
			case "player.chat":
				//player.chat이라면, 이부분이 실행됨
				$player = $data['player'];
				$msg = $data['message'];
				
				if(strpos($msg,'화성||이화성||Mars||마스') !==false)
				$this->api->chat->broadcast($player->username" 운지!") ;
				$player->teleport(new Vector3(20,300,20));
				return false;
		}
		break;
	}
}
?>
