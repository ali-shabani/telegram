<?php


namespace Alish\Telegram\Events;


class FailedToParseUpdateFromTelegram
{

    public $exception;

    public function __construct($exception)
    {
        $this->exception = $exception;
    }

}