<?php

namespace Alish\Telegram\API;

use Illuminate\Support\Str;

class BaseTelegram
{
    public function __call($name, $arguments)
    {
        if (Str::startsWith($name, 'get')) {
            $property = Str::snake(preg_replace('/get/', '', $name, 1));
            return $this->$property;
        } elseif (Str::startsWith($name, 'set')) {
            $property = Str::snake(preg_replace('/set/', '', $name, 1));
            $this->$property = $arguments[0];
            return $this;
        }
    }
}
