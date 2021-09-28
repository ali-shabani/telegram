<?php


namespace Alish\Telegram\API;

class PollOption extends TelegramAPI
{

    /**
     * @var string $text
     * Option text, 1-100 characters
     */
    protected string $text;

    /**
     * @var integer $voter_count
     * Number of users that voted for this option
     */
    protected int $voter_count;
}
