<?php


namespace Alish\Telegram\Facades;

/**
 * Class InlineKeyboardButton
 * @package Alish\Telegram\Facades
 *
 */
class InlineKeyboardButton extends Button
{
    protected static function getClass()
    {
        return \Alish\Telegram\Buttons\InlineKeyboardButton::class;
    }
}
