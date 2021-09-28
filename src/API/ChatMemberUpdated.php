<?php


namespace Alish\Telegram\API;


class ChatMemberUpdated extends TelegramAPI
{
    /**
     * @var Chat $chat
     * Chat the user belongs to
     */
    public Chat $chat;

    /**
     * @var User $from
     * Performer of the action, which resulted in the change
     */
    public User $from;

    /**
     * @var int $date
     * Date the change was done in Unix time
     */
    public int $date;

    /**
     * @var ChatMember $old_chat_member
     * Previous information about the chat member
     */
    public ChatMember $old_chat_member;

    /**
     * @var ChatMember $new_chat_member
     * New information about the chat member
     */
    public ChatMember $new_chat_member;

    /**
     * @var ChatInviteLink|null $invite_link
     * Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     */
    public ?ChatInviteLink $invite_link;
}