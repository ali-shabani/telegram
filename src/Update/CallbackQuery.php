<?php


namespace Alish\Telegram\Update;

use Alish\Telegram\API\Chat;
use Alish\Telegram\API\User;
use Alish\Telegram\Facades\Telegram;
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
     * Unique identifier for this query
     *
     * @return string
     */
    protected function id() : string
    {
        return $this->callbackQuery()->getId();
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

    /**
     * Use this method to send answers to callback queries sent from inline keyboards.
     * The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, True is returned.
     *
     * @param  string  $text
     * @param  array|null  $options
     * @return mixed
     */
    protected function answer(string $text, ?array $options = [])
    {
        $data = array_merge([
            'callback_query_id' => $this->id(),
            'text' => $text
        ], $options);

        return Telegram::answerCallbackQuery($data);
    }
}
