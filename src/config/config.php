<?php

    return [

        'defaults' => [
            'token_bot' => '',
            'webhook'   => '',
        ],

        'commands' => [
            'active' => false,
            'list'   => [
                'start' => 'App\Class',
            ],
        ],

        'handlers' => [
            'CallbackQuery'      => null,
            'ChannelPost'        => null,
            'ChosenInlineResult' => null,
            'EditedChannelPost'  => null,
            'EditedMessage'      => null,
            'InlineQuery'        => null,
            'Message'            => null,
            'ShippingQuery'      => null,
            'PreCheckoutQuery'   => null,
            'ExceptionHandler'   => null,
        ],

        /*
         * define ExceptionHandler if you want to handle any error occurred during telegram response parser process
         * if you don't define any, TelegramException will throw
         * you should handle this error if you don't want to telegram send the response again
         */
        'ExceptionHandler' => null,

        'loaders' => [

        ],
    ];
