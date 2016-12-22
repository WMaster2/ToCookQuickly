<?php
namespace TCQ;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{

public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this,$this);
	if(!file_exists($this->getDataFolder())){
	@mkdir($this->getDataFolder(), 0744, true);
}
		$this->saveDefaultConfig();
		$this->reloadConfig();
		$this->l = $this->getConfig()->get("Use_language");
		$this->b = $this->getConfig()->get("Cooking_block");
		$this->lang("start");
	
}

public function onTap(PlayerInteractEvent $event){
	$player = $event->getPlayer();
	$bid = $event->getBlock()->getId();
	$id = $player->getInventory()->getItemInHand()->getId();
		if($player->getGamemode() == "0"){
		if($bid == "$this->b"){

			switch($id){
			case "319":
				$player->getInventory()->addItem(Item::get(320, 0, 1));
				$player->getInventory()->removeItem(Item::get(319, 0, 1));
				$this->lang("did");
				break;

			case "363":
				$player->getInventory()->addItem(Item::get(364, 0, 1));
				$player->getInventory()->removeItem(Item::get(363, 0, 1));
				$this->lang("did");
				break;

			case "365":
				$player->getInventory()->addItem(Item::get(366, 0, 1));
				$player->getInventory()->removeItem(Item::get(365, 0, 1));
				$this->lang("did");
				break;

			case "392":
				$player->getInventory()->addItem(Item::get(393, 0, 1));
				$player->getInventory()->removeItem(Item::get(392, 0, 1));
				$this->lang("did");
				break;

			case "411":
				$player->getInventory()->addItem(Item::get(412, 0, 1));
				$player->getInventory()->removeItem(Item::get(411, 0, 1));
				$this->lang("did");
				break;

			case "423":
				$player->getInventory()->addItem(Item::get(424, 0, 1));
				$player->getInventory()->removeItem(Item::get(423, 0, 1));
				$this->lang("did");
				break;

			case "349":
				$player->getInventory()->addItem(Item::get(350, 0, 1));
				$player->getInventory()->removeItem(Item::get(349, 0, 1));
				$this->lang("did");
				break;
			}
		}
	}

}
public function lang($phrase){
		$lang = $this->getConfig()->get("Use_language");
        $urlh = file_get_contents("https://raw.githubusercontent.com/PMpluginMaker-Team/ToCookQuickly/lang/lang/{$lang}.json"); 
        $url = json_decode($urlh, true); 
        return $url["{$phrase}"];
		}
}
