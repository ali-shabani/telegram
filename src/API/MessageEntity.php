<?php

namespace Alish\Telegram\API;

class MessageEntity extends BaseTelegram
{
    /**
     * @var string
     *             Type of the entity. Can be mention (username), hashtag, bot_command, url, email, bold (bold text),
     *             italic (italic text), code (monowidth string), pre (monowidth block), text_link (for clickable text URLs),
     *             text_mention (for users without usernames)
     */
    protected $type;

    /**
     * @var int
     *          Offset in UTF-16 code units to the start of the entity
     */
    protected $offset;

    /**
     * @var int
     *          Length of the entity in UTF-16 code units
     */
    protected $length;

    /**
     * @var string|null
     *                  Optional. For “text_link” only, url that will be opened after user taps on the text
     */
    protected $url;

    /**
     * @var User|null
     *                Optional. For “text_mention” only, the mentioned user
     */
    protected $user;
}
