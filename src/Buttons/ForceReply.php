<?php


namespace Alish\Telegram\Buttons;


class ForceReply extends Button
{

    /**
     * Shows reply interface to the user, as if they manually selected the bot‘s message and tapped ’Reply'
     *
     * @return ForceReply
     */
    public function forceReply() : self
    {
        $this->button['force_reply'] = true;
        return $this;
    }

    /**
     * Use this parameter if you want to force reply from specific users only. Targets:
     * 1) users that are @mentioned in the text of the Message object;
     * 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     *
     * @param  bool  $selective
     * @return ForceReply
     */
    public function selective(bool $selective) : self
    {
        $this->button['selective'] = $selective;
        return $this;
    }

}