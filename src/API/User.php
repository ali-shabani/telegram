<?php

namespace Alish\Telegram\API;

class User extends TelegramAPI
{

    /**
     * @var integer $id
     * Unique identifier for this user or bot
     */
    public int $id;

    /**
     * @var bool $is_bot
     * True, if this user is a bot
     */
    public bool $is_bot;

    /**
     * @var string $first_name
     * User‘s or bot’s first name
     */
    public string $first_name;

    /**
     * @var string|null $last_name
     * User‘s or bot’s last name
     */
    public ?string $last_name;

    /**
     * @var string|null $username
     * User‘s or bot’s username
     */
    public ?string $username;

    /**
     * @var string|null $language_code
     * IETF language tag of the user's language
     */
    public ?string $language_code;

    /**
     * @var bool|null $can_join_groups
     * Optional. True, if the bot can be invited to groups. Returned only in getMe.
     */
    public ?bool $can_join_groups;

    /**
     * @var bool|null $can_read_all_group_messages
     * Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     */
    public ?bool $can_read_all_group_messages;

    /**
     * @var bool|null $supports_inline_queries
     * Optional. True, if the bot supports inline queries. Returned only in getMe.
     */
    public ?bool $supports_inline_queries;
}
