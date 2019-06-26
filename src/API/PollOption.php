<?php

namespace Alish\Telegram\API;

class PollOption extends BaseTelegram
{
    /**
     * @var string
     * Option text, 1-100 characters
     */
    protected $text;

    /**
     * @var int
     * Number of users that voted for this option
     */
    protected $voter_count;
}
