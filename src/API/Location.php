<?php

namespace Alish\Telegram\API;

class Location extends BaseTelegram
{
    /**
     * @var float
     * Longitude as defined by sender
     */
    protected $longitude;

    /**
     * @var float
     * Latitude as defined by sender
     */
    protected $latitude;
}
