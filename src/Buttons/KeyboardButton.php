<?php


namespace Alish\Telegram\Buttons;

class KeyboardButton extends Button
{

    /**
     * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
     *
     * @param  string  $text
     * @return KeyboardButton
     */
    public function text(string $text) : self
    {
        $this->button['text'] = $text;
        return $this;
    }

    /**
     * If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only
     *
     * @param  bool  $requestContact
     * @return KeyboardButton
     */
    public function requestContact(bool $requestContact) : self
    {
        $this->button['request_contact'] = $requestContact;
        return $this;
    }

    /**
     * If True, the user's current location will be sent when the button is pressed. Available in private chats only
     *
     * @param  bool  $requestLocation
     * @return KeyboardButton
     */
    public function requestLocation(bool $requestLocation) : self
    {
        $this->button['request_location'] = $requestLocation;
        return $this;
    }
}
