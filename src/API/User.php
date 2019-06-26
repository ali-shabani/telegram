<?php

namespace Alish\Telegram\API;

class User extends BaseTelegram
{
    /**
     * @var int
     * Unique identifier for this user or bot
     */
    protected $id;

    /**
     * @var string
     * True, if this user is a bot
     */
    protected $is_bot;

    /**
     * @var string
     * User‘s or bot’s first name
     */
    protected $first_name;

    /**
     * @var string|null
     * User‘s or bot’s last name
     */
    protected $last_name;

    /**
     * @var string|null
     * User‘s or bot’s username
     */
    protected $username;

    /**
     * @var string|null
     * IETF language tag of the user's language
     */
    protected $language_code;
}
