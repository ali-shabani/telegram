<?php

namespace Alish\Telegram\API;

class Contact extends BaseTelegram
{

    /**
     * @var string $phone_number
     * Contact's phone number
     */
    protected $phone_number;

    /**
     * @var string $first_name
     * Contact's first name
     */
    protected $first_name;

    /**
     * @var string|null $last_name
     * Optional. Contact's last name
     */
    protected $last_name;

    /**
     * @var integer|null $user_id
     * Optional. Contact's user identifier in Telegram
     */
    protected $user_id;

    /**
     * @var string|null $vcard
     * Additional data about the contact in the form of a vCard
     */
    protected $vcard;
}
