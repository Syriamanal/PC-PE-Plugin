<?php
/*
__PocketMine Plugin__
name=Mars
description=설정된말을 했을때 운지
version=0.1.1
author=Betta_Fish
class=OWNNJI
apiversion=12
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




				if(strpos($msg,'A||B||Mars||C') !==false){
					$this->api->chat->broadcast($player->username." 운지!");
					$player->teleport(new Vector3(20,300,20));
				}
				return false;
		}
		break;
	}
}
?>

