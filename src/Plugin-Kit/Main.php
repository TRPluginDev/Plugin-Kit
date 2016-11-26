<?php

namespace Plugin-Kit;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;
use pocketmine\entity\Effect;
use pocketmine\item\Item;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\utils\Config;
use pocketmine\utils\Random;
use pocketmine\utils\TextFormat as color;
use pocketmine\permission\Permission;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginManager;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\level\sound\AnvilFallSound;
use pocketmine\level\sound\AnvilUseSound;
use pocketmine\level\sound\EndermanTeleportSound;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerDropItemEvent;
use onebone\economyapi\EconomyAPI;

class main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        
		
        $prefix = "§l§6»";
        $ses = $sender->getPlayer();
        
        switch($command->getName()){
            case "kit":
			
			 $sender->sendMessage("§aKitler: §fOyuncu, Vip, Youtuber, Yetkili");
            
                if(isset($args[0])){
                    if($sender instanceof Player){
                    switch(strtolower($args[0])){
                        
                        case "oyuncu":
                            if(!$sender->hasPermission("kit.oyuncu.command")){
                            $sender->sendMessage("§cBu komutu kullanmaya yetkin yok!");
                            break;
                            }
                            $sender->getPlayer()->getInventory()->clearAll();
                            $sender->getPlayer()->removeAllEffects(); 
                            $sender->getInventory()->addItem(Item::get(272, 0, 1));
                            $sender->getInventory()->addItem(Item::get(261, 0, 1));
                            $sender->getInventory()->addItem(Item::get(260, 0, 32));
                            $sender->getInventory()->addItem(Item::get(322, 0, 3));
                            $sender->getInventory()->addItem(Item::get(262, 0, 64));
                           
                            $sender->getInventory()->setHelmet(Item::get(302, 0, 1));
                            $sender->getInventory()->setChestplate(Item::get(303, 0, 1));
                            $sender->getInventory()->setLeggings(Item::get(304, 0, 1));
                            $sender->getInventory()->setBoots(Item::get(305, 0, 1));
                            $sender->sendMessage($prefix."§aOyuncu kitini aldın!");
                            $ses->getLevel()->addSound(new AnvilUseSound($ses));
                            break;
                        case "youtuber":
                            if(!$sender->hasPermission("kit.youtube.command")){
                            $sender->sendMessage("§cSen YouTuber değlsin!");
                            break;
                            }
                            $sender->getPlayer()->getInventory()->clearAll();
                            $sender->getPlayer()->removeAllEffects(); 
                            $sender->getInventory()->addItem(Item::get(279, 0, 1));
                            $sender->getInventory()->addItem(Item::get(261, 0, 1));
                            $sender->getInventory()->addItem(Item::get(260, 0, 32));
                            $sender->getInventory()->addItem(Item::get(322, 0, 16));
                            $sender->getInventory()->addItem(Item::get(262, 0, 64));
                           
                            $sender->getInventory()->setHelmet(Item::get(306, 0, 1));
                            $sender->getInventory()->setChestplate(Item::get(307, 0, 1));
                            $sender->getInventory()->setLeggings(Item::get(308, 0, 1));
                            $sender->getInventory()->setBoots(Item::get(309, 0, 1));
                            $sender->sendMessage($prefix."§4You§fTuber §aKitini aldın");
                            $ses->getLevel()->addSound(new AnvilUseSound($ses));
                            break;
                        case "vip":
                            if(!$sender->hasPermission("kit.vip.command")){
                            $sender->sendMessage("§cSen VIP değilsin!");
                            break;
                            }
                            $sender->getPlayer()->getInventory()->clearAll();
                            $sender->getPlayer()->removeAllEffects(); 
                            $sender->getInventory()->addItem(Item::get(267, 0, 1));
                            $sender->getInventory()->addItem(Item::get(261, 0, 1));
                            $sender->getInventory()->addItem(Item::get(260, 0, 32));
                            $sender->getInventory()->addItem(Item::get(322, 0, 16));
                            $sender->getInventory()->addItem(Item::get(262, 0, 64));
                           
                            $sender->getInventory()->setHelmet(Item::get(306, 0, 1));
                            $sender->getInventory()->setChestplate(Item::get(307, 0, 1));
                            $sender->getInventory()->setLeggings(Item::get(308, 0, 1));
                            $sender->getInventory()->setBoots(Item::get(309, 0, 1));
                            $sender->sendMessage($prefix."§bVIP §akitini aldın");
                            $ses->getLevel()->addSound(new AnvilFallSound($ses));
                            break;
                        case "yetkili":
                            if(!$sender->hasPermission("kit.yetkili.command")){
                            $sender->sendMessage("§cYetkin Yok!");
                            break;
                            }
                            $sender->getPlayer()->getInventory()->clearAll();
                            $sender->getPlayer()->removeAllEffects(); 
                            $sender->getInventory()->addItem(Item::get(276, 0, 1));
                            $sender->getInventory()->addItem(Item::get(261, 0, 1));
                            $sender->getInventory()->addItem(Item::get(260, 0, 64));
                            $sender->getInventory()->addItem(Item::get(322, 0, 32));
                            $sender->getInventory()->addItem(Item::get(262, 0, 64));
                           
                            $sender->getInventory()->setHelmet(Item::get(310, 0, 1));
                            $sender->getInventory()->setChestplate(Item::get(311, 0, 1));
                            $sender->getInventory()->setLeggings(Item::get(312, 0, 1));
                            $sender->getInventory()->setBoots(Item::get(313, 0, 1));
                            $sender->sendMessage($prefix."§aTitan §aKitini aldın!");
                            $ses->getLevel()->addSound(new AnvilFallSound($ses));
                            break;

                    }       
                
                }              
        }
    
    }
   
   
   
        
        
       
       
}

