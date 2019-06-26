<?php

namespace Alish\Telegram\API;

class InlineKeyboardMarkup extends BaseTelegram
{
    /**
     * @var InlineKeyboardButton[][]
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     */
    protected $inline_keyboard;
}
