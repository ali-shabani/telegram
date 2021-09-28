<?php


namespace Alish\Telegram\API;


class VoiceChatParticipantsInvited extends TelegramAPI
{

    /**
     * @var User[]|null $users
     * Optional. New members that were invited to the voice chat
     */
    public ?array $users;
}