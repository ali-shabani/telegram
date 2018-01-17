<?php 

    return [

        'defaults' => [
            'token_bot' => '',
            'webhook' => '',
        ],

        'commands' => [
            'active' => false,
            'list' => [
                'start' => 'App\Class'
            ]
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
            'PreCheckoutQuery'   => null
        ],

        'loaders' => [
            
        ]
    ];