<?php

namespace Alish\Telegram\Update;

use Alish\Telegram\API\User;

class ChosenInlineResult extends Base
{
    /**
     * The result of an inline query that was chosen by a user and sent to their chat partner.
     * Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     *
     * @return \Alish\Telegram\API\ChosenInlineResult
     */
    protected function chosenInlineResult() : \Alish\Telegram\API\ChosenInlineResult
    {
        return $this->update->getChosenInlineResult();
    }

    /**
     * The unique identifier for the result that was chosen.
     *
     * @return string
     */
    protected function resultId() : string
    {
        return $this->chosenInlineResult()->getResultId();
    }

    /**
     * The user that chose the result.
     *
     * @return User
     */
    protected function user() : User
    {
        return $this->chosenInlineResult()->getFrom();
    }

    /**
     * 	The query that was used to obtain the result.
     *
     * @return string
     */
    protected function query() : string
    {
        return $this->chosenInlineResult()->getQuery();
    }
}
