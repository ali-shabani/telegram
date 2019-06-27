<?php


namespace Alish\Telegram\Buttons;


use Illuminate\Support\Collection;

class ReplyKeyboardMarkup extends Button
{

    protected $rows;

    /**
     * @param  KeyboardButton  ...$arguments
     * @return ReplyKeyboardMarkup
     */
    public function row(...$arguments) : self
    {
        $this->rows[] = (new Collection($arguments))->map(function (KeyboardButton $button) {
            return $button->build();
        })->toArray();
        return $this;
    }

    /**
     * Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons).
     * Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     *
     * @param  bool  $resizeKeyboard
     * @return ReplyKeyboardMarkup
     */
    public function resizeKeyboard(bool $resizeKeyboard) : self
    {
        $this->button['resize_keyboard'] = $resizeKeyboard;
        return $this;
    }

    /**
     * Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available,
     * but clients will automatically display the usual letter-keyboard in the chat – the user can press
     * a special button in the input field to see the custom keyboard again. Defaults to false.
     *
     * @param  bool  $oneTimeKeyboard
     * @return ReplyKeyboardMarkup
     */
    public function oneTimeKeyboard(bool $oneTimeKeyboard) : self
    {
        $this->button['one_time_keyboard'] = $oneTimeKeyboard;
        return $this;
    }

    /**
     * Use this parameter if you want to show the keyboard to specific users only.
     * Targets: 1) users that are @mentioned in the text of the Message object;
     * 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     *
     * Example: A user requests to change the bot‘s language, bot replies to the request with a keyboard to select the new language.
     * Other users in the group don’t see the keyboard.
     *
     * @param  bool  $selective
     * @return ReplyKeyboardMarkup
     */
    public function selective(bool $selective) : self
    {
        $this->button['selective'] = $selective;
        return $this;
    }

    /**
     * @return array
     */
    public function build(): array
    {
        $this->button['keyboard'] = $this->rows;
        return $this->button;
    }

}