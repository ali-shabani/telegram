<?php

namespace Alish\Telegram\Command;

use Alish\Telegram\API\Message;
use Alish\Telegram\API\Update;
use Alish\Telegram\API\User;
use Alish\Telegram\TelegramMethods;

class Command
{
    use TelegramMethods;

    /**
     * This object represents an incoming update.
     *
     * @var Update
     */
    protected $update;

    /**
     * Command constructor.
     *
     * @param Update $update
     */
    public function __construct(Update $update)
    {
        $this->update = $update;
    }

    /**
     * New incoming message of any kind — text, photo, sticker, etc.
     *
     * @return Message
     */
    protected function message() : Message
    {
        return $this->update->getMessage();
    }

    /**
     * Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int
     */
    protected function chatId() : int
    {
        return $this->message()->getChat()->getId();
    }

    /**
     * Sender, empty for messages sent to channels.
     *
     * @return User
     */
    protected function user() : User
    {
        return $this->message()->getFrom();
    }
}
