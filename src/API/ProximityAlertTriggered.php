<?php


namespace Alish\Telegram\API;


class ProximityAlertTriggered
{
    /**
     * @var User $user
     * User that triggered the alert
     */
    public User $user;

    /**
     * @var User $watcher
     * User that set the alert
     */
    public User $watcher;

    /**
     * @var int $distance
     * The distance between the users
     */
    public int $distance;

}