<?php

namespace Alish\Telegram\API;

class ShippingAddress extends TelegramAPI
{

    /**
     * @var string $country_code
     * ISO 3166-1 alpha-2 country code
     */
    protected $country_code;

    /**
     * @var string $state
     * State, if applicable
     */
    protected $state;

    /**
     * @var string $city
     * City
     */
    protected $city;

    /**
     * @var string $street_line1
     * First line for the address
     */
    protected $street_line1;

    /**
     * @var string $street_line2
     * Second line for the address
     */
    protected $street_line2;

    /**
     * @var string $post_code
     * Address post code
     */
    protected $post_code;
}
