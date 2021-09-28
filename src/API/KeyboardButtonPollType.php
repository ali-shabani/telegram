<?php


namespace Alish\Telegram\API;


class KeyboardButtonPollType extends TelegramAPI
{
    /**
     * @var string|null $type
     * Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode. If regular is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
     */
    public ?string $type;
}