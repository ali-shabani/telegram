<?php


namespace Alish\Telegram\API;

class PollOption extends BaseTelegram
{

    /**
     * @var string $text
     * Option text, 1-100 characters
     */
    protected $text;

    /**
     * @var integer $voter_count
     * Number of users that voted for this option
     */
    protected $voter_count;
}
