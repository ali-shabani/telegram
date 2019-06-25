<?php

namespace Alish\Telegram\API;

class CallbackQuery extends BaseTelegram
{
    /**
     * @var string
     *             Unique identifier for this query
     */
    protected $id;

    /**
     * @var User
     *           Sender
     */
    protected $from;

    /**
     * @var Message|null
     *                   Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
     */
    protected $message;

    /**
     * @var string|null
     *                  Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     */
    protected $inline_message_id;

    /**
     * @var string
     *             Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
     */
    protected $chat_instance;

    /**
     * @var string
     *             Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
     */
    protected $data;

    /**
     * @var string
     *             Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     */
    protected $game_short_name;
}
