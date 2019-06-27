<?php


namespace Alish\Telegram\Update;

use Alish\Telegram\API\PollOption;

class Poll extends Base
{

    /**
     * New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
     *
     * @return \Alish\Telegram\API\Poll
     */
    protected function poll() : \Alish\Telegram\API\Poll
    {
        return $this->update->getPoll();
    }

    /**
     * 	Unique poll identifier
     *
     * @return string
     */
    protected function id() : string
    {
        return $this->poll()->getId();
    }

    /**
     * 	Poll question, 1-255 characters
     *
     * @return string
     */
    protected function question() : string
    {
        return $this->poll()->getQuestion();
    }

    /**
     * List of poll options
     *
     * @return PollOption[]
     */
    protected function options()
    {
        return $this->poll()->getOptions();
    }

    /**
     * True, if the poll is closed
     *
     * @return bool
     */
    protected function isClosed() : bool
    {
        return $this->poll()->getIsClosed();
    }
}
