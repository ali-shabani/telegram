<?php

Route::post(config('telegram.defaults.webhook'), 'Alish\Telegram\Http\Controllers\TelegramController');
