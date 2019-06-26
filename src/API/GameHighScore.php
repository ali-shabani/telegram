<?php

namespace Alish\Telegram\API;

class GameHighScore extends BaseTelegram
{
    /**
     * @var int
     * Position in high score table for the game
     */
    protected $position;

    /**
     * @var User
     * User
     */
    protected $user;

    /**
     * @var int
     * Score
     */
    protected $score;
}
