<?php

namespace VsrStudio\MusicUI;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener {

    protected function onEnable(): void {
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if ($command->getName() === "musicui") {
            if (!$sender instanceof Player) {
                $sender->sendMessage("This command can only be used by players.");
                return true;
            }

            $form = new MusicForm();
            $sender->sendForm($form->getMusicForm());
            return true;
        }
        return false;
    }
}
