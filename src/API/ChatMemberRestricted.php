<?php

namespace Alish\Telegram\API;

class ChatMemberRestricted extends TelegramAPI
{
    /**
     * @var bool $is_member
     * True, if the user is a member of the chat at the moment of the request
     */
    public bool $is_member;

    /**
     * @var bool $can_change_info
     * True, if the user is allowed to change the chat title, photo and other settings
     */
    public bool $can_change_info;

    /**
     * @var bool $can_invite_users
     * True, if the user is allowed to invite new users to the chat
     */
    public bool $can_invite_users;

    /**
     * @var bool $can_pin_messages
     * True, if the user is allowed to pin messages
     */
    public bool $can_pin_messages;

    /**
     * @var bool $can_send_messages
     * True, if the user is allowed to send text messages, contacts, locations and venues
     */
    public bool $can_send_messages;

    /**
     * @var bool $can_send_media_messages
     * True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
     */
    public bool $can_send_media_messages;

    /**
     * @var bool $can_send_polls
     * True, if the user is allowed to send polls
     */
    public bool $can_send_polls;

    /**
     * @var bool $can_send_other_messages
     * True, if the user is allowed to send animations, games, stickers and use inline bots
     */
    public bool $can_send_other_messages;

    /**
     * @var bool $can_add_web_page_previews
     * True, if the user is allowed to add web page previews to their messages
     */
    public bool $can_add_web_page_previews;

    /**
     * @var int $until_date
     * Date when restrictions will be lifted for this user; unix time. If 0, then the user is restricted forever
     */
    public int $until_date;
}