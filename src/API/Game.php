<?php

namespace Alish\Telegram\API;

class Game extends BaseTelegram
{
    /**
     * @var string
     * Title of the game
     */
    protected $title;

    /**
     * @var string
     * Description of the game
     */
    protected $description;

    /**
     * @var PhotoSize[]
     * Photo that will be displayed in the game message in chats.
     */
    protected $photo;

    /**
     * @var string
     * Optional. Brief description of the game or high scores included in the game message.
     * Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
     */
    protected $text;

    /**
     * @var MessageEntity[]
     * Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
     */
    protected $text_entries;

    /**
     * @var Animation
     * Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
     */
    protected $animation;
}
