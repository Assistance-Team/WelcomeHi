<?php 
  
namespace WelcomeHi; 
  
use pocketmine\plugin\PluginBase; 
use pocketmine\event\Listener; 
use pocketmine\utils\TextFormat; 
use pocketmine\event\player\PlayerJoinEvent; 
  
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
  
       public function JoinEvent(PlayerJoinEvent $event) { 
       $player = $event->getPlayer();
       $event->setJoinMessage (TextFormat::RED . " [" . $player->getName() . "] §dWelcome the Server! ");
     } 
 } 
  
 
?> 
