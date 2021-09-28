<?php

namespace Alish\Telegram\API;

class Location extends TelegramAPI
{

    /**
     * @var float $longitude
     * Longitude as defined by sender
     */
    public float $longitude;

    /**
     * @var float $latitude
     * Latitude as defined by sender
     */
    public float $latitude;

    /**
     * @var float|null $horizontal_accuracy
     * Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     */
    public ?float $horizontal_accuracy;

    /**
     * @var int|null $live_period
     * Optional. Time relative to the message sending date, during which the location can be updated, in seconds. For active live locations only.
     */
    public ?int $live_period;

    /**
     * @var int|null $heading
     * Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
     */
    public ?int $heading;

    /**
     * @var int|null $proximity_alert_radius
     * Optional. Maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
     */
    public ?int $proximity_alert_radius;
}
