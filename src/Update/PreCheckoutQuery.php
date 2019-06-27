<?php


namespace Alish\Telegram\Update;

use Alish\Telegram\API\User;

class PreCheckoutQuery extends Base
{

    /**
     * New incoming pre-checkout query. Contains full information about checkout
     *
     * @return \Alish\Telegram\API\PreCheckoutQuery
     */
    protected function preCheckoutQuery() : \Alish\Telegram\API\PreCheckoutQuery
    {
        return $this->update->getPreCheckoutQuery();
    }

    /**
     * User who sent the query
     *
     * @return User
     */
    protected function user() : User
    {
        return $this->preCheckoutQuery()->getFrom();
    }

    /**
     * Unique query identifier
     *
     * @return string
     */
    protected function id() : string
    {
        return $this->preCheckoutQuery()->getId();
    }

    /**
     * Three-letter ISO 4217 currency code
     *
     * @return string
     */
    protected function currency() : string
    {
        return $this->preCheckoutQuery()->getCurrency();
    }

    /**
     * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145.
     * See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     *
     * @return int
     */
    protected function totalAmount() : int
    {
        return $this->preCheckoutQuery()->getTotalAmount();
    }

    /**
     * Bot specified invoice payload
     *
     * @return string
     */
    protected function invoicePayload() : string
    {
        return $this->preCheckoutQuery()->getInvoicePayload();
    }
}
