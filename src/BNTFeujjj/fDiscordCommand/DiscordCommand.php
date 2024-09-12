<?php

namespace BNTFeujjj\fDiscordCommand;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\permission\DefaultPermissions;
use pocketmine\player\Player;

class DiscordCommand extends Command
{
    public function __construct()
    {
        $config = Main::getInstance()->getConfig();
        parent::__construct("discord", $config->get("description") ?? "§cDescription manquante.", "/discord");
        $this->setPermission(DefaultPermissions::ROOT_USER);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): void
    {
        if (!$sender instanceof Player) return;

        $config = Main::getInstance()->getConfig();
        $sender->sendMessage($config->get("discord-message"));
    }
}
