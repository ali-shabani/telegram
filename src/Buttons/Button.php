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
}
