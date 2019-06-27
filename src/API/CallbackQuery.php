<?php

namespace Alish\Telegram\API;

class CallbackQuery extends BaseTelegram
{

    /**
     * @var string $id
     * Unique identifier for this query
     */
    protected $id;

    /**
     * @var User $from
     * Telegram
     */
    protected $from;

    /**
     * @var Message|null $message
     * Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
     */
    protected $message;

    /**
     * @var string|null $inline_message_id
     * Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     */
    protected $inline_message_id;

    /**
     * @var string $chat_instance
     * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
     */
    protected $chat_instance;

    /**
     * @var string $data
     * Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
     */
    protected $data;

    /**
     * @var string $game_short_name
     * Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     */
    protected $game_short_name;
}
