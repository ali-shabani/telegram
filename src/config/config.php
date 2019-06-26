<?php

return [
    // default bot name
    // you can define bots in bots section
    'default' => 'main',

    // list of bots
    // each bots should have a key as name and an array value that contains token + optional webhook
    // if you don't define webhook for bot token used as webhook https://yourdomains.com/bot/token
    'bots' => [
        'main' => [
            'token' => env('TELEGRAM_MAIN_BOT_TOKEN')
        ]
    ],

    // define your bot commands here
    // for each command you can define 1 handler
    'commands' => [
        'active' => false,
        'list' => [

        ]
    ],

    // define handlers for different type of updates that receive from telegram
    'updates' => [
        'message'              => null,
        'edited_message'       => null,
        'channel_post'         => null,
        'edited_channel_post'  => null,
        'inline_query'         => null,
        'chosen_inline_result' => null,
        'callback_query'       => null,
        'shipping_query'       => null,
        'pre_checkout_query'   => null,
        'poll'                 => null
    ],

    // you can define middleware for operating actions on telegram update object before it pass to relevant handler
    'middleware' => [

    ]
];