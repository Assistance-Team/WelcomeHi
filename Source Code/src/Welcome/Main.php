<?php

namespace WelcomeHi;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{
	public function onLoad() {
		$this->getLogger()->info("§aThis plugin is WelcomeHi plugin.");
		$this->getLogger()->info("§cMade By ZINGDING.");
	}
	public function onEnable() {
		$this->getLogger()->info("§dGivecookie plugin enabled.");
		$this->getLogger()->info("§cThis plugin's License is the ZINGDING-EULA.");
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}

    public function 
    $event->getPlayer()->sendMessage($event->getPlayer()->getName() . " 안녕 ");

?>