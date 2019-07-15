<?php


namespace Alish\Telegram\Facades;

abstract class Button
{
    protected $class;

    abstract protected static function getClass();

    public static function __callStatic($name, $arguments)
    {
        $class = static::getClass();
        $self = new $class;

        if (method_exists($self, $name)) {
            return $self->$name(...$arguments);
        }

        throw new \BadMethodCallException($name);
    }
}
