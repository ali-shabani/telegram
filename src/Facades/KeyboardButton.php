<?php


namespace Alish\Telegram\Facades;

class KeyboardButton extends Button
{
    protected static function getClass()
    {
        return \Alish\Telegram\Buttons\KeyboardButton::class;
    }
}
