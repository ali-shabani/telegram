<?php
/**
 * Created by PhpStorm.
 * User: pyramid
 * Date: 11/14/17
 * Time: 10:11 PM.
 */

namespace Alish\Telegram\API;

class ShippingQuery extends BaseTelegram
{
    /**
     * @var string
     * Unique query identifier
     */
    protected $id;

    /**
     * @var User
     * User who sent the query
     */
    protected $from;

    /**
     * @var string
     * Bot specified invoice payload
     */
    protected $invoice_payload;

    /**
     * @var ShippingAddress
     * User specified shipping address
     */
    protected $shipping_address;
}
