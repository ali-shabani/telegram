<?php

namespace Alish\Telegram\API;

class InlineKeyboardButton extends TelegramAPI
{

    /**
     * @var string $text
     * Label text on the button
     */
    public string $text;

    /**
     * @var null|String $url
     * Optional. HTTP url to be opened when button is pressed
     */
    public ?string $url;

    /**
     * @var LoginUrl|null $login_url
     * Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
     */
    public ?LoginUrl $login_url;

    /**
     * @var null|String $callback_data
     * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
     */
    public ?string $callback_data;

    /**
     * @var null|String $switch_inline_query
     * Optional. If set, pressing the button will prompt the user to select one of their chats,
     * open that chat and insert the bot‘s username and the specified inline query in the input field. Can be empty, in which case just the bot’s username will be inserted.
     * Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a public chat with it.
     * Especially useful when combined with switch_pm… actions – in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
     */
    public ?string $switch_inline_query;

    /**
     * @var null|String $switch_inline_query_current_chat
     * Optional. If set, pressing the button will insert the bot‘s username and the specified inline query in the current chat's input field.
     * Can be empty, in which case only the bot’s username will be inserted.
     * This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options.
     */
    public ?string $switch_inline_query_current_chat;

    /**
     * @var CallbackGame|null $callback_game
     * Optional. Description of the game that will be launched when the user presses the button.
     * NOTE: This type of button must always be the first button in the first row.
     */
    public ?CallbackGame $callback_game;

    /**
     * @var boolean|null $pay
     * Optional. Specify True, to send a Pay button.
     * NOTE: This type of button must always be the first button in the first row.
     */
    public ?bool $pay;
}
