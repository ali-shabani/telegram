<?php

namespace Alish\Telegram\Update;

use Alish\Telegram\API\Chat;
use Alish\Telegram\TelegramMethods;

class Message extends Base
{
    use TelegramMethods;

    /**
     * New incoming message of any kind — text, photo, sticker, etc.
     *
     * @return \Alish\Telegram\API\Message
     */
    protected function message() : \Alish\Telegram\API\Message
    {
        return $this->update->getMessage();
    }

    /**
     * Conversation the message belongs to.
     *
     * @return Chat
     */
    protected function chat() : Chat
    {
        return $this->message()->getChat();
    }

    /**
     * Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int
     */
    protected function chatId() : int
    {
        return $this->chat()->getId();
    }

    /**
     * @param string $text
     * @param array  $options
     *
     * @return mixed
     */
    protected function reply(string $text, array $options)
    {
        $options = array_merge([
            'reply_to_message_id' => $this->message()->getMessageId(),
        ], $options);

        return $this->sendMessage($text, $options);
    }
}
