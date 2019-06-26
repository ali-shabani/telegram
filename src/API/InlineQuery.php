<?php

namespace Alish\Telegram\API;

class InlineQuery extends BaseTelegram {

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
     * @var Location|null $location
     * Optional. Telegram location, only for bots that request user location
     */
    protected $location;

    /**
     * @var string $query
     * Text of the query (up to 512 characters)
     */
    protected $query;

    /**
     * @var string $offset
     * Offset of the results to be returned, can be controlled by the bot
     */
    protected $offset;

}