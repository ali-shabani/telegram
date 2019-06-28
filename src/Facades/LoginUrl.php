<?php


namespace Alish\Telegram\Facades;

class LoginUrl extends Button
{
    protected static function getClass()
    {
        return \Alish\Telegram\Buttons\LoginUrl::class;
    }
}
