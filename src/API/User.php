<?php

namespace Alish\Telegram\API;

class User extends BaseTelegram
{

    /**
     * @var integer $id
     * Unique identifier for this user or bot
     */
    protected $id;

    /**
     * @var string $is_bot
     * True, if this user is a bot
     */
    protected $is_bot;

    /**
     * @var string $first_name
     * User‘s or bot’s first name
     */
    protected $first_name;

    /**
     * @var string|null $last_name
     * User‘s or bot’s last name
     */
    protected $last_name;

    /**
     * @var string|null $username
     * User‘s or bot’s username
     */
    protected $username;

    /**
     * @var string|null $language_code
     * IETF language tag of the user's language
     */
    protected $language_code;
}
