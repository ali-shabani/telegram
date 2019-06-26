<?php


namespace Alish\Telegram\Update;


class EditedChannelPost extends Message
{

    /**
     * New version of a message that is known to the bot and was edited
     *
     * @return \Alish\Telegram\API\Message
     */
    protected function message() : \Alish\Telegram\API\Message
    {
        return $this->update->getEditedChannelPost();
    }

}