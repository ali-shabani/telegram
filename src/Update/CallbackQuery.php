<?php


namespace Alish\Telegram\Update;


use Alish\Telegram\API\Chat;
use Alish\Telegram\API\User;
use Alish\Telegram\TelegramMethods;

class CallbackQuery extends Base
{

    use TelegramMethods;

    /**
     * New incoming callback query
     *
     * @return \Alish\Telegram\API\CallbackQuery
     */
    protected function callbackQuery() : \Alish\Telegram\API\CallbackQuery
    {
        return $this->update->getCallbackQuery();
    }

    /**
     * Sender
     *
     * @return User
     */
    protected function user() : User
    {
        return $this->callbackQuery()->getForm();
    }

    /**
     * Message with the callback button that originated the query.
     * Note that message content and message date will not be available if the message is too old
     *
     * @return \Alish\Telegram\API\Message
     */
    protected function message() : \Alish\Telegram\API\Message
    {
        return $this->callbackQuery()->getMessage();
    }

    /**
     * Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
     *
     * @return string
     */
    protected function data() : string
    {
        return $this->callbackQuery()->getData();
    }

    /**
     * @return Chat
     */
    protected function chat() : Chat
    {
        return $this->message()->getChat();
    }

    /**
     * @return int
     */
    protected function chatId() : int
    {
        return $this->chat()->getId();
    }

}