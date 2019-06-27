<?php


namespace Alish\Telegram\Update;

use Alish\Telegram\API\ShippingAddress;
use Alish\Telegram\API\User;

class ShippingQuery extends Base
{

    /**
     * @return \Alish\Telegram\API\ShippingQuery
     */
    protected function shippingQuery() : \Alish\Telegram\API\ShippingQuery
    {
        return $this->update->getShippingQuery();
    }

    /**
     * Unique query identifier
     *
     * @return string
     */
    protected function id() : string
    {
        return $this->shippingQuery()->getId();
    }

    /**
     * User who sent the query
     *
     * @return User
     */
    protected function user() : User
    {
        return $this->shippingQuery()->getFrom();
    }

    /**
     * 	Bot specified invoice payload
     *
     * @return string
     */
    protected function invoicePayload() : string
    {
        return $this->shippingQuery()->getInvoicePayload();
    }

    /**
     * User specified shipping address
     *
     * @return ShippingAddress
     */
    protected function shippingAddress() : ShippingAddress
    {
        return $this->shippingQuery()->getShippingAddress();
    }
}
