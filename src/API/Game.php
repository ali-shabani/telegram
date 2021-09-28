<?php

namespace Alish\Telegram\API;

class Game extends TelegramAPI
{

    /**
     * @var string $title
     * Title of the game
     */
    protected $title;

    /**
     * @var string $description
     * Description of the game
     */
    protected $description;

    /**
     * @var PhotoSize[] $photo
     * Photo that will be displayed in the game message in chats.
     */
    protected $photo;

    /**
     * @var string $text
     * Optional. Brief description of the game or high scores included in the game message.
     * Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
     */
    protected $text;

    /**
     * @var MessageEntity[] $text_entries
     * Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
     */
    protected $text_entries;

    /**
     * @var Animation $animation
     * Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
     */
    protected $animation;
}
