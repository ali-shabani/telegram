<?php


namespace Alish\Telegram\API;


class BotCommand extends TelegramAPI
{

    /**
     * @var string $command
     * Text of the command, 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     */
    public string $command;

    /**
     * @var string $description
     * Description of the command, 3-256 characters.
     */
    public string $description;
}