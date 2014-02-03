<?php

/*
__PocketMine Plugin__
name=TPALL
description=Adds a new command that tp's everyone to your position
version=1.0.0
author=Betta_Fish
class=tp
apiversion=10
*/

class tp implements Plugin{
    private $api;
    public function __construct(ServerAPI $api, $server = false)
    {
        $this->api = $api;
    }

    public function init(){
        $this->api->console->register("tpall","Tp's all the online players to your position", array($this, "tp"));
    }

    public function tp($cmd, $args, $issuer)
    	{
    		if(!$issuer instanceof player){
			return console("please run this command in-game.");
			}
			if($this->api->isOp(player)
			{
        		$x = $issuer->entity->x;
        		$y = $issuer->entity->y;
        		$z = $issuer->entity->z;
        		$level = $issuer->level;
        		foreach($this->api->player->getAll() as $player){
            	$player->teleport(new Position($x, $y, $z, $level));
			}
        		return "[tpall]모든 인원이 tp 됩니다.";
			}else{
			
		}

    public function __destruct(){}
}
?>
