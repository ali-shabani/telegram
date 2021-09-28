<?php

namespace Alish\Telegram\API;

class GameHighScore extends TelegramAPI
{

    /**
     * @var integer $position
     * Position in high score table for the game
     */
    protected $position;

    /**
     * @var User $user
     * User
     */
    protected $user;

    /**
     * @var integer $score
     * Score
     */
    protected $score;
}
