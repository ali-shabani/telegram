<?php

namespace Alish\Telegram\API;

class KeyboardButton extends TelegramAPI
{

    /**
     * @var string $text
     * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
     */
    public string $text;

    /**
     * @var boolean|null $request_contact
     * Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in public chats only
     */
    public ?bool $request_contact;

    /**
     * @var boolean|null $request_location
     * Optional. If True, the user's current location will be sent when the button is pressed. Available in public chats only
     */
    public ?bool $request_location;

    /**
     * @var KeyboardButtonPollType|null $request_poll
     * Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only
     */
    public ?KeyboardButtonPollType $request_poll;
}
