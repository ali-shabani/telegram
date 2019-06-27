<?php

namespace Alish\Telegram\API;

class InlineKeyboardMarkup extends BaseTelegram
{

    /**
     * @var InlineKeyboardButton[][] $inline_keyboard
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     */
    protected $inline_keyboard;
}
