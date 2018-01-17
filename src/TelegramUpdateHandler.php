<?php
/**
 * Created by PhpStorm.
 * User: pyramid
 * Date: 11/15/17
 * Time: 1:42 PM
 */

namespace Alish\Telegram;


abstract class TelegramUpdateHandler
{
    protected $update;

    public function __construct($update)
    {
        $this->update = $update;
    }

    abstract public function handler();
}