<?php


namespace Alish\Telegram\API;


class MessageAutoDeleteTimerChanged
{

    /**
     * @var int $message_auto_delete_time
     * New auto-delete time for messages in the chat
     */
    public int $message_auto_delete_time;
}