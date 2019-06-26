<?php

namespace Alish\Telegram\API;

class Invoice extends BaseTelegram
{
    /**
     * @var string
     *             Product name
     */
    protected $title;

    /**
     * @var string
     *             Product description
     */
    protected $description;

    /**
     * @var string
     *             Unique bot deep-linking parameter that can be used to generate this invoice
     */
    protected $start_parameter;

    /**
     * @var string
     *             Three-letter ISO 4217 currency code
     */
    protected $currency;

    /**
     * @var int
     *          Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145.
     *          See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    protected $total_amount;
}
