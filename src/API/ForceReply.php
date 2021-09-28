<?php

namespace Alish\Telegram\API;

class ForceReply extends TelegramAPI
{

    /**
     * @var true $force_reply
     * Shows reply interface to the user, as if they manually selected the bot‘s message and tapped ’Reply'
     */
    public $force_reply;

    /**
     * @var string|null $input_field_placeholder
     * Optional. The placeholder to be shown in the input field when the reply is active; 1-64 characters
     */
    public ?string $input_field_placeholder;

    /**
     * @var boolean|null $selective
     * Optional. Use this parameter if you want to force reply from specific users only.
     * Targets: 1) users that are mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     */
    public ?bool $selective;
}
