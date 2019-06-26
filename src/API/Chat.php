<?php

namespace Alish\Telegram\API;

class Chat extends BaseTelegram
{
    /**
     * @var int
     * 	Unique identifier for this chat.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     */
    protected $id;

    /**
     * @var string
     * Type of chat, can be either “protected”, “group”, “supergroup” or “channel”
     */
    protected $type;

    /**
     * @var string
     * Title, for supergroups, channels and group chats
     */
    protected $title;

    /**
     * @var string|null
     * Username, for protected chats, supergroups and channels if available
     */
    protected $username;

    /**
     * @var string|null
     * First name of the other party in a protected chat
     */
    protected $first_name;

    /**
     * @var string|null
     * Last name of the other party in a protected chat
     */
    protected $last_name;

    /**
     * @var bool|null
     * True if a group has ‘All Members Are Admins’ enabled.
     */
    protected $all_members_are_administrators;

    /**
     * @var ChatPhoto|null
     * Chat photo. Returned only in getChat.
     */
    protected $photo;
    /**
     * @var string|null
     * Description, for supergroups and channel chats. Returned only in getChat.
     */
    protected $description;
    /**
     * @var string|null
     * Chat invite link, for supergroups and channel chats. Returned only in getChat.
     */
    protected $invite_link;
    /**
     * @var Message|null
     * Pinned message, for supergroups. Returned only in getChat.
     */
    protected $pinned_message;
    /**
     * @var string|null
     * For supergroups, name of group sticker set. Returned only in getChat.
     */
    protected $sticker_set_name;
    /**
     * @var bool|null
     * True, if the bot can change the group sticker set. Returned only in getChat.
     */
    protected $can_set_sticker_set;
}
