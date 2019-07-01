<?php


namespace Alish\Telegram\Buttons;

class InlineKeyboardButton extends Button
{

    /**
     * Label text on the button
     *
     * @param  string  $text
     * @return InlineKeyboardButton
     */
    public function text(string $text) : self
    {
        $this->button['text'] = $text;
        return $this;
    }

    /**
     * HTTP or tg:// url to be opened when button is pressed
     *
     * @param  string  $url
     * @return InlineKeyboardButton
     */
    public function url(string $url) : self
    {
        $this->button['url'] = $url;
        return $this;
    }

    /**
     * An HTTP URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
     *
     * @param  LoginUrl  $loginUrl
     * @return InlineKeyboardButton
     */
    public function loginUrl(LoginUrl $loginUrl) : self
    {
        $this->button['login_url'] = $loginUrl->build();
        return $this;
    }

    /**
     * Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
     *
     * @param  string  $callbackData
     * @return InlineKeyboardButton
     */
    public function callbackData(string $callbackData) : self
    {
        $this->button['callback_data'] = $callbackData;
        return $this;
    }

    /**
     * If set, pressing the button will prompt the user to select one of their chats,
     * open that chat and insert the bot‘s username and the specified inline query in the input field.
     * Can be empty, in which case just the bot’s username will be inserted.
     *
     * Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a private chat with it.
     * Especially useful when combined with switch_pm… actions – in this case the user will be automatically returned to the chat they switched from,
     * skipping the chat selection screen.
     *
     * @param  string  $switchInlineQuery
     * @return InlineKeyboardButton
     */
    public function switchInlineQuery(string $switchInlineQuery) : self
    {
        $this->button['switch_inline_query'] = $switchInlineQuery;
        return $this;
    }

    /**
     * If set, pressing the button will insert the bot‘s username and the specified inline query in the current chat's input field.
     * Can be empty, in which case only the bot’s username will be inserted.
     *
     * This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options.
     *
     * @param  string  $switchInlineQueryCurrentChat
     * @return InlineKeyboardButton
     */
    public function switchInlineQueryCurrentChat(string $switchInlineQueryCurrentChat) : self
    {
        $this->button['switch_inline_query_current_chat'] = $switchInlineQueryCurrentChat;
        return $this;
    }

    /**
     * Description of the game that will be launched when the user presses the button.
     *
     * @return InlineKeyboardButton
     */
    public function callbackGame() : self
    {
        return $this;
    }

    /**
     * Specify True, to send a Pay button.
     *
     * NOTE: This type of button must always be the first button in the first row.
     *
     * @param  bool  $pay
     * @return InlineKeyboardButton
     */
    public function pay(bool $pay) : self
    {
        $this->button['pay'] = $pay;
        return $this;
    }
}
