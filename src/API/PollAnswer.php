<?php


namespace Alish\Telegram\API;


class PollAnswer extends TelegramAPI
{

    /**
     * @var string $poll_id
     * Unique poll identifier
     */
    public string $poll_id;

    /**
     * @var User $user
     * The user, who changed the answer to the poll
     */
    public User $user;

    /**
     * @var integer[] $options_id
     * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
     */
    public array $options_id;
}