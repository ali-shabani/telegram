<?php

namespace Alish\Telegram\API;

class Venue extends BaseTelegram
{
    /**
     * @var Location
     * Venue location
     */
    protected $location;

    /**
     * @var string
     * Name of the venue
     */
    protected $title;

    /**
     * @var string
     * Address of the venue
     */
    protected $address;

    /**
     * @var string|null
     * Optional. Foursquare identifier of the venue
     */
    protected $foursquare_id;

    /**
     * @var string|null
     * Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     */
    protected $foursquare_type;
}
