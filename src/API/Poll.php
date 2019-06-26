<?php

namespace Alish\Telegram\API;

class Poll extends BaseTelegram
{
    /**
     * @var string
     *             Unique poll identifier
     */
    protected $id;

    /**
     * @var string
     *             Poll question, 1-255 characters
     */
    protected $question;

    /**
     * @var PollOption[]
     *                   List of poll options
     */
    protected $options;

    /**
     * @var bool
     *           True, if the poll is closed
     */
    protected $is_closed;
}
