<?php


namespace Alish\Telegram\API;


class BotCommandScopeChat extends BotCommandScope
{

    /**
     * @var string $chat_id
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    public string $chat_id;
}