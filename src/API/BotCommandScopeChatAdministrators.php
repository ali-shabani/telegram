<?php


namespace Alish\Telegram\API;


class BotCommandScopeChatAdministrators extends BotCommandScope
{

    /**
     * @var string $chat_id
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    public string $chat_id;
}