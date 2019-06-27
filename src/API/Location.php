<?php

namespace Alish\Telegram\API;

class Location extends BaseTelegram
{

    /**
     * @var float $longitude
     * Longitude as defined by sender
     */
    protected $longitude;

    /**
     * @var float $latitude
     * Latitude as defined by sender
     */
    protected $latitude;
}
