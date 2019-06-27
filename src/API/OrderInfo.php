<?php
/**
 * Created by PhpStorm.
 * User: pyramid
 * Date: 11/15/17
 * Time: 12:26 PM
 */

namespace Alish\Telegram\API;

class OrderInfo extends BaseTelegram
{

    /**
     * @var string|null $name
     * Optional. User name
     */
    protected $name;

    /**
     * @var string|null $phone_number
     * Optional. User's phone number
     */
    protected $phone_number;

    /**
     * @var string|null $email
     * Optional. User email
     */
    protected $email;

    /**
     * @var string|null $shipping_address
     * Optional. User shipping address
     */
    protected $shipping_address;
}
