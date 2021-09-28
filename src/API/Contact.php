<?php

namespace Alish\Telegram\API;

class Contact extends TelegramAPI
{

    /**
     * @var string $phone_number
     * Contact's phone number
     */
    protected string $phone_number;

    /**
     * @var string $first_name
     * Contact's first name
     */
    protected string $first_name;

    /**
     * @var string|null $last_name
     * Optional. Contact's last name
     */
    protected ?string $last_name;

    /**
     * @var integer|null $user_id
     * Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    protected ?int $user_id;

    /**
     * @var string|null $vcard
     * Additional data about the contact in the form of a vCard
     */
    protected ?string $vcard;
}
