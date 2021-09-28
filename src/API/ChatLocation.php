<?php


namespace Alish\Telegram\API;


class ChatLocation extends TelegramAPI
{

    /**
     * @var Location $location
     * The location to which the supergroup is connected. Can't be a live location.
     */
    public Location $location;

    /**
     * @var string $address
     * Location address; 1-64 characters, as defined by the chat owner
     */
    public string $address;
}