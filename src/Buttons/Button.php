<?php


namespace Alish\Telegram\Buttons;


class Button
{
    protected $button;

    /**
     * @return array
     */
    public function build() : array
    {
        return $this->button;
    }

    public static function __callStatic($name, $arguments)
    {
        $self = new self();

        if (method_exists($self, $name)) {
            return $self->$name(...$arguments);
        }

        throw new \BadMethodCallException($name);
    }

}