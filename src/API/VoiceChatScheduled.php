<?php


namespace Alish\Telegram\API;


class VoiceChatScheduled extends TelegramAPI
{

    /**
     * @var int $start_date
     * Point in time (Unix timestamp) when the voice chat is supposed to be started by a chat administrator
     */
    public int $start_date;
}