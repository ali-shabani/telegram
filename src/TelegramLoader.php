<?php


namespace Alish\Telegram;


use Alish\Telegram\API\Update;

abstract class TelegramLoader
{

    protected $update;

    public function __construct(Update $update)
    {
        $this->update = $update;
    }

    abstract public function process();

}