<?php


namespace Alish\Telegram\Facades;

class InlineKeyboardMarkup extends Button
{
    protected static function getClass()
    {
        return \Alish\Telegram\Buttons\InlineKeyboardMarkup::class;
    }
}