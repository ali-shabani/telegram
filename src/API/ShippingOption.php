<?php
/**
 * Created by PhpStorm.
 * User: pyramid
 * Date: 11/15/17
 * Time: 12:28 PM
 */

namespace Alish\Telegram\API;

class ShippingOption extends TelegramAPI
{

    /**
     * @var string $id
     * Shipping option identifier
     */
    protected $id;

    /**
     * @var string $title
     * Option title
     */
    protected $title;

    /**
     * @var LabeledPrice[] $prices
     * List of price portions
     */
    protected $prices;
}
