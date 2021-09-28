<?php
/**
 * Created by PhpStorm.
 * User: pyramid
 * Date: 11/14/17
 * Time: 10:11 PM
 */

namespace Alish\Telegram\API;

class ShippingQuery extends TelegramAPI
{

    /**
     * @var string $id
     * Unique query identifier
     */
    protected $id;

    /**
     * @var User $from
     * User who sent the query
     */
    protected $from;

    /**
     * @var string $invoice_payload
     * Bot specified invoice payload
     */
    protected $invoice_payload;

    /**
     * @var ShippingAddress $shipping_address
     * User specified shipping address
     */
    protected $shipping_address;
}
