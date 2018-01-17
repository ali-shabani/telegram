<?php


use Alish\Telegram\Telegram;

Route::post(config('telegram.defaults.webhook'), 'Alish\Telegram\Http\Controllers\TelegramController');



