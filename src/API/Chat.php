<?php

namespace Alish\Telegram\API;

class Chat extends TelegramAPI
{

    /**
     * @var integer $id
     * Unique identifier for this chat.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     */
    public int $id;

    /**
     * @var string $type
     * Type of chat, can be either “public”, “group”, “supergroup” or “channel”
     */
    public string $type;

    /**
     * @var string|null $title
     * Title, for supergroups, channels and group chats
     */
    public ?string $title;

    /**
     * @var string|null $username
     * Username, for public chats, supergroups and channels if available
     */
    public ?string $username;

    /**
     * @var string|null $first_name
     * First name of the other party in a public chat
     */
    public ?string $first_name;

    /**
     * @var string|null $last_name
     * Last name of the other party in a public chat
     */
    public ?string $last_name;

    /**
     * @var ChatPhoto|null $photo
     * Chat photo. Returned only in getChat.
     */
    public ?ChatPhoto $photo;

    /**
     * @var string|null $bio
     * Optional. Bio of the other party in a private chat. Returned only in getChat.
     */
    public ?string $bio;

    /**
     * @var string|null $description
     * Description, for supergroups and channel chats. Returned only in getChat.
     */
    public ?string $description;

    /**
     * @var string|null $invite_link
     * Chat invite link, for supergroups and channel chats. Returned only in getChat.
     */
    public ?string $invite_link;

    /**
     * @var Message|null $pinned_message
     * Pinned message, for supergroups. Returned only in getChat.
     */
    public ?Message $pinned_message;

    /**
     * @var ChatPermissions|null $permissions
     * Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
     */
    public ?ChatPermissions $permissions;

    /**
     * @var int|null $slow_mode_delay
     * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user. Returned only in getChat.
     */
    public ?int $slow_mode_delay;

    /**
     * @var int|null $message_auto_delete_time
     * Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in getChat.
     */
    public ?int $message_auto_delete_time;

    /**
     * @var string|null $sticker_set_name
     * For supergroups, name of group sticker set. Returned only in getChat.
     */
    public ?string $sticker_set_name;

    /**
     * @var boolean|null $can_set_sticker_set
     * True, if the bot can change the group sticker set. Returned only in getChat.
     */
    public ?bool $can_set_sticker_set;

    /**
     * @var int|null
     * Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats.
     * This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in getChat.
     */
    public ?int $linked_chat_id;

    /**
     * @var ChatLocation|null $location
     * Optional. For supergroups, the location to which the supergroup is connected. Returned only in getChat.
     */
    public ?ChatLocation $location;
}
