<?php

namespace Alish\Telegram\API;

class InlineQuery extends BaseTelegram
{
    /**
     * @var string
     * Unique identifier for this query
     */
    protected $id;

    /**
     * @var User
     * Telegram
     */
    protected $from;

    /**
     * @var Location|null
     * Optional. Telegram location, only for bots that request user location
     */
    protected $location;

    /**
     * @var string
     * Text of the query (up to 512 characters)
     */
    protected $query;

    /**
     * @var string
     * Offset of the results to be returned, can be controlled by the bot
     */
    protected $offset;
}
