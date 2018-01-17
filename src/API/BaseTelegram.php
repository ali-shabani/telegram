<?php

namespace Alish\Telegram\API;


class BaseTelegram
{

    public function __call($name, $arguments)
    {
        if (starts_with($name, 'get')) {
            $property = snake_case(preg_replace('/get/', '', $name, 1));
            return $this->$property;
        }
        else if (starts_with($name, 'set')) {
            $property = snake_case(preg_replace('/set/', '', $name, 1));
            $this->$property = $arguments[0];
            return $this;
        }
    }

}