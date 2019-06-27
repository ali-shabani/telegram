<?php


namespace Alish\Telegram\Facades;

class ForceReply extends Button
{
    protected static function getClass()
    {
        return \Alish\Telegram\Buttons\ForceReply::class;
    }
}
