<?php

namespace Alish\Telegram\API;

class Venue extends BaseTelegram
{

    /**
     * @var Location $location
     * Venue location
     */
    protected $location;

    /**
     * @var string $title
     * Name of the venue
     */
    protected $title;

    /**
     * @var string $address
     * Address of the venue
     */
    protected $address;

    /**
     * @var string|null $foursquare_id
     * Optional. Foursquare identifier of the venue
     */
    protected $foursquare_id;

    /**
     * @var string|null $foursquare_type
     * Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     */
    protected $foursquare_type;
}
