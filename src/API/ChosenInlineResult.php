<?php

namespace Alish\Telegram\API;

class ChosenInlineResult extends BaseTelegram
{
    /**
     * @var string
     *             The unique identifier for the result that was chosen
     */
    protected $result_id;

    /**
     * @var User
     *           The user that chose the result
     */
    protected $from;

    /**
     * @var Location|null
     *                    Optional. Telegram location, only for bots that require user location
     */
    protected $location;

    /**
     * @var string|null
     *                  Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
     *                  Will be also received in callback queries and can be used to edit the message.
     */
    protected $inline_message_id;

    /**
     * @var string
     *             The query that was used to obtain the result
     */
    protected $query;
}
