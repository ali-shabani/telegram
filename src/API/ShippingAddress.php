<?php

namespace Alish\Telegram\API;

class ShippingAddress extends BaseTelegram
{
    /**
     * @var string
     *             ISO 3166-1 alpha-2 country code
     */
    protected $country_code;

    /**
     * @var string
     *             State, if applicable
     */
    protected $state;

    /**
     * @var string
     *             City
     */
    protected $city;

    /**
     * @var string
     *             First line for the address
     */
    protected $street_line1;

    /**
     * @var string
     *             Second line for the address
     */
    protected $street_line2;

    /**
     * @var string
     *             Address post code
     */
    protected $post_code;
}
