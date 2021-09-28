<?php


namespace Alish\Telegram\API;


class BotCommandScopeChatMember extends BotCommandScope
{

    /**
     * @var string $chat_id
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    public string $chat_id;

    /**
     * @var int $user_id
     * Unique identifier of the target user
     */
    public int $user_id;
}