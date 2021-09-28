<?php

namespace Alish\Telegram\API;

abstract class ChatMember extends TelegramAPI
{
    /**
     * @var string $status
     */
    public string $status;

    /**
     * @var User $user
     * Information about the user
     */
    public User $user;
}
