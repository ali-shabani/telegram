<?php

namespace Alish\Telegram\API;

class Venue extends TelegramAPI
{

    /**
     * @var Location $location
     * Venue location
     */
    public Location $location;

    /**
     * @var string $title
     * Name of the venue
     */
    public string $title;

    /**
     * @var string $address
     * Address of the venue
     */
    public string $address;

    /**
     * @var string|null $foursquare_id
     * Optional. Foursquare identifier of the venue
     */
    public ?string $foursquare_id;

    /**
     * @var string|null $foursquare_type
     * Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     */
    public ?string $foursquare_type;

    /**
     * @var string|null $google_place_id
     * Optional. Google Places identifier of the venue
     */
    public ?string $google_place_id;

    /**
     * @var string|null $google_place_type
     * Optional. Google Places type of the venue.
     */
    public ?string $google_place_type;
}
