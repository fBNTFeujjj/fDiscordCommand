<?php

namespace BNTFeujjj\fDiscordCommand;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase
{

    use SingletonTrait;
    public function onLoad(): void
    {
        self::setInstance($this);
    }

    protected function onEnable(): void
    {
        $this->saveDefaultConfig();
        $this->getServer()->getCommandMap()->registerAll("", [
            new DiscordCommand(),
        ]);
    }
}
