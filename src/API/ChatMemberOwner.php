<?php

namespace Alish\Telegram\API;

class ChatMemberOwner extends TelegramAPI
{
    /**
     * @var bool $is_anonymous
     * True, if the user's presence in the chat is hidden
     */
    public bool $is_anonymous;

    /**
     * @var string|null $custom_title
     * Optional. Custom title for this user
     */
    public ?string $custom_title;
}