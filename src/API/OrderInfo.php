<?php
/**
 * Created by PhpStorm.
 * User: pyramid
 * Date: 11/15/17
 * Time: 12:26 PM.
 */

namespace Alish\Telegram\API;

class OrderInfo extends BaseTelegram
{
    /**
     * @var string|null
     *                  Optional. User name
     */
    protected $name;

    /**
     * @var string|null
     *                  Optional. User's phone number
     */
    protected $phone_number;

    /**
     * @var string|null
     *                  Optional. User email
     */
    protected $email;

    /**
     * @var string|null
     *                  Optional. User shipping address
     */
    protected $shipping_address;
}
