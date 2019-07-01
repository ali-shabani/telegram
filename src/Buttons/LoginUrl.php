<?php


namespace Alish\Telegram\Buttons;

class LoginUrl extends Button
{

    /**
     * An HTTP URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data,
     * the original URL without information about the user will be opened. The data added is the same as described in Receiving authorization data.
     *
     * NOTE: You must always check the hash of the received data to verify the authentication and the integrity of the data as described in Checking authorization.
     *
     * @param  string  $url
     * @return LoginUrl
     */
    public function url(string $url) : self
    {
        $this->button['url'] = $url;
        return $this;
    }

    /**
     * New text of the button in forwarded messages.
     *
     * @param  string  $forwardText
     * @return LoginUrl
     */
    public function forwardText(string $forwardText) : self
    {
        $this->button['forward_text'] = $forwardText;
        return $this;
    }

    /**
     * Username of a bot, which will be used for user authorization. See Setting up a bot for more details. If not specified, the current bot's username will be assumed.
     * The url's domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details.
     *
     * @param  string  $botUsername
     * @return LoginUrl
     */
    public function botUsername(string $botUsername) : self
    {
        $this->button['bot_username'] = $botUsername;
        return $this;
    }

    /**
     * Pass True to request the permission for your bot to send messages to the user.
     *
     * @param  bool  $requestWriteAccess
     * @return LoginUrl
     */
    public function requestWriteAccess(bool $requestWriteAccess) : self
    {
        $this->button['request_write_access'] = $requestWriteAccess;
        return $this;
    }
}
