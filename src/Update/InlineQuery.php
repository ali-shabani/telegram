<?php


namespace Alish\Telegram\Update;


use Alish\Telegram\API\User;

class InlineQuery extends Base
{

    /**
     * New incoming inline query
     *
     * @return \Alish\Telegram\API\InlineQuery
     */
    protected function inlineQuery() : \Alish\Telegram\API\InlineQuery
    {
        return $this->update->getInlineQuery();
    }

    /**
     * Sender
     *
     * @return User
     */
    protected function user() : User
    {
        return $this->inlineQuery()->getForm();
    }

    /**
     * Text of the query (up to 512 characters)
     *
     * @return string
     */
    protected function query() : string
    {
        return $this->inlineQuery()->getQuery();
    }

    /**
     * Offset of the results to be returned, can be controlled by the bot
     *
     * @return string
     */
    protected function offset() : string
    {
        return $this->inlineQuery()->getOffset();
    }

}