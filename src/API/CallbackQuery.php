<?php

namespace Alish\Telegram\API;

class CallbackQuery extends TelegramAPI
{

    /**
     * @var string $id
     * Unique identifier for this query
     */
    public string $id;

    /**
     * @var User $from
     * Telegram
     */
    public User $from;

    /**
     * @var Message|null $message
     * Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
     */
    public ?Message $message;

    /**
     * @var string|null $inline_message_id
     * Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     */
    public ?string $inline_message_id;

    /**
     * @var string $chat_instance
     * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
     */
    public string $chat_instance;

    /**
     * @var string|null $data
     * Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
     */
    public ?string $data;

    /**
     * @var string|null $game_short_name
     * Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     */
    public ?string $game_short_name;
}
