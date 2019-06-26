<?php

namespace Alish\Telegram\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Telegram chatId(string $chatId) set ChatId
 * @method static getMe() get information about bot
 */
class Telegram extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Telegram';
    }
}
