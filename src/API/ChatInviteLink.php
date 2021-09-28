<?php


namespace Alish\Telegram\API;


class ChatInviteLink extends TelegramAPI
{
    /**
     * @var string $invite_link
     * The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
     */
    public string $invite_link;

    /**
     * @var User $creator
     * Creator of the link
     */
    public User $creator;

    /**
     * @var bool $is_primary
     * True, if the link is primary
     */
    public bool $is_primary;

    /**
     * @var bool $is_revoked
     * True, if the link is revoked
     */
    public bool $is_revoked;

    /**
     * @var int|null $expire_date
     * Optional. Point in time (Unix timestamp) when the link will expire or has been expired
     */
    public ?int $expire_date;

    /**
     * @var int|null $member_limit
     * Optional. Maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     */
    public ?int $member_limit;
}