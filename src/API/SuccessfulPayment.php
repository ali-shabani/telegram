<?php
/**
 * Created by PhpStorm.
 * User: pyramid
 * Date: 11/14/17
 * Time: 1:22 PM
 */

namespace Alish\Telegram\API;


class SuccessfulPayment extends BaseTelegram {

    /**
     * @var string $currency
     * Three-letter ISO 4217 currency code
     */
    protected $currency;

    /**
     * @var integer $total_amount
     * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145.
     * See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    protected $total_amount;

    /**
     * @var string $invoice_payload
     * Bot specified invoice payload
     */
    protected $invoice_payload;

    /**
     * @var string|null $shipping_option_id
     * Optional. Identifier of the shipping option chosen by the user
     */
    protected $shipping_option_id;

    /**
     * @var OrderInfo|null $order_info
     * Optional. Order info provided by the user
     */
    protected $order_info;

    /**
     * @var string $telegram_payment_charge_id
     * Telegram payment identifier
     */
    protected $telegram_payment_charge_id;

    /**
     * @var string $provider_payment_charge_id
     * Provider payment identifier
     */
    protected $provider_payment_charge_id;

}