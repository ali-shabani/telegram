<?php


namespace Alish\Telegram\Facades;


class ReplyKeyboardMarkup extends Button
{
    protected static function getClass()
    {
        return \Alish\Telegram\Buttons\ReplyKeyboardMarkup::class;
    }
}