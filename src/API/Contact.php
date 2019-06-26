<?php

namespace Alish\Telegram\API;

class Contact extends BaseTelegram
{
    /**
     * @var string
     *             Contact's phone number
     */
    protected $phone_number;

    /**
     * @var string
     *             Contact's first name
     */
    protected $first_name;

    /**
     * @var string|null
     *                  Optional. Contact's last name
     */
    protected $last_name;

    /**
     * @var int|null
     *               Optional. Contact's user identifier in Telegram
     */
    protected $user_id;

    /**
     * @var string|null
     *                  Additional data about the contact in the form of a vCard
     */
    protected $vcard;
}
