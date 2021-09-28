<?php

namespace Alish\Telegram\API;

class InlineKeyboardMarkup extends TelegramAPI
{

    /**
     * @var InlineKeyboardButton[][] $inline_keyboard
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     */
    protected array $inline_keyboard;
}
