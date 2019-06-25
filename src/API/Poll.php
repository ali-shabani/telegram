<?php


namespace Alish\Telegram\API;


class Poll extends BaseTelegram
{

    /**
     * @var string $id
     * Unique poll identifier
     */
    protected $id;

    /**
     * @var string $question
     * Poll question, 1-255 characters
     */
    protected $question;

    /**
     * @var PollOption[]
     * List of poll options
     */
    protected $options;

    /**
     * @var boolean $is_closed
     * True, if the poll is closed
     */
    protected $is_closed;

}