<?php

$webhooks = collect(config('telegram.bots'))
    ->map(function ($bot) {
        return isset($bot['webhook']) ? $bot['webhook'] : $bot['token'];
    })->implode('|');


Route::post('bot/{$webhook}', 'Alish\Telegram\Http\Controllers\UpdateController')
    ->where([
        'webhook' => $webhooks
    ]);
