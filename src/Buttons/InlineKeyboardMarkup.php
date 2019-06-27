<?php


namespace Alish\Telegram\Buttons;

use Illuminate\Support\Collection;

class InlineKeyboardMarkup extends Button
{

    protected $rows;

    /**
     * @param  InlineKeyboardButton  ...$arguments
     * @return InlineKeyboardMarkup
     */
    public function row(...$arguments) : self
    {
        $this->rows[] = (new Collection($arguments))->map(function (InlineKeyboardButton $button) {
            return $button->build();
        })->toArray();

        return $this;
    }

    /**
     * @return array
     */
    public function build(): array
    {
        return $this->button['inline_keyboard'] = $this->rows;
    }

}