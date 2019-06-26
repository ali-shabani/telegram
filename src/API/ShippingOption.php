<?php
/**
 * Created by PhpStorm.
 * User: pyramid
 * Date: 11/15/17
 * Time: 12:28 PM.
 */

namespace Alish\Telegram\API;

class ShippingOption extends BaseTelegram
{
    /**
     * @var string
     * Shipping option identifier
     */
    protected $id;

    /**
     * @var string
     * Option title
     */
    protected $title;

    /**
     * @var LabeledPrice[]
     * List of price portions
     */
    protected $prices;
}
