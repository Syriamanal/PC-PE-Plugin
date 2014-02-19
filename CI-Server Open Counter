<?php

/*
__PocketMine Plugin__
name=CI-Server Open Counter
description=Counting Server Open time
version=Beta0.1
author=CoreInside
class=ServerOpenCounter
apiversion=11
*/

class ServerOpenCounter implements Plugin{
	
	private $api;
	private $minute;
	private $server;
	private $servname;
	
	public function __construct(ServerAPI $api, $server = false){
		$this->api = $api;
		$this->server = ServerAPI::request();
	}
	
	public function init(){
		$this->api->console->register("serveropencounter", "Chacking Server Open Counter.", array($this, "command"));
		$this->api->addHandler("player.spawn", array($this, "eventHandler"), 100);
		
		$this->api->schedule(12000, array($this, "ServerOnSchedule"), array(), true);
		$this->api->ban->cmdWhitelist("serveropencounter");
		$this->api->ban->cmdWhitelist("서버열린시간");
	}
	
	public function ServerOnSchedule()
	{
		$this->minute++;
		$min = $this->minute*10;
		for($hour = 0;$min >= 60;$min = $min - 60){
		$hour++;
		}
		$soutput = "/[CoreSystem] $hour Hour $min Min Server Opened";
		$this->api->chat->broadcast(($soutput));
	}
	
	public function command($cmd, $arg){
		switch($cmd){
			case "serveropencounter":
			case "서버열린시간":
				$min = $this->minute*10;
				for($hour = 0;$min >= 60;$min = $min - 60){
				$hour++;
				}
				$output .= "/[CoreSystem] $hour Hour $min Min Server Opened";
				break;
		}
		return $output;
	}
	public function __destruct(){
	}
}
