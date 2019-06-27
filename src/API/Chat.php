<?php

namespace Alish\Telegram\API;

class Chat extends BaseTelegram
{

    /**
     * @var integer $id
     * 	Unique identifier for this chat.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     */
    protected $id;

    /**
     * @var string $type
     * Type of chat, can be either “protected”, “group”, “supergroup” or “channel”
     */
    protected $type;

    /**
     * @var string $title
     * Title, for supergroups, channels and group chats
     */
    protected $title;

    /**
     * @var string|null $username
     * Username, for protected chats, supergroups and channels if available
     */
    protected $username;

    /**
     * @var string|null $first_name
     * First name of the other party in a protected chat
     */
    protected $first_name;

    /**
     * @var string|null $last_name
     * Last name of the other party in a protected chat
     */
    protected $last_name;

    /**
     * @var boolean|null $all_members_are_administrators
     * True if a group has ‘All Members Are Admins’ enabled.
     */
    protected $all_members_are_administrators;

    /**
     * @var ChatPhoto|null $photo
     * Chat photo. Returned only in getChat.
     */
    protected $photo;
    /**
     * @var string|null $description
     * Description, for supergroups and channel chats. Returned only in getChat.
     */
    protected $description;
    /**
     * @var string|null $invite_link
     * Chat invite link, for supergroups and channel chats. Returned only in getChat.
     */
    protected $invite_link;
    /**
     * @var Message|null $pinned_message
     * Pinned message, for supergroups. Returned only in getChat.
     */
    protected $pinned_message;
    /**
     * @var string|null $sticker_set_name
     * For supergroups, name of group sticker set. Returned only in getChat.
     */
    protected $sticker_set_name;
    /**
     * @var boolean|null $can_set_sticker_set
     * True, if the bot can change the group sticker set. Returned only in getChat.
     */
    protected $can_set_sticker_set;
}
