<?php

namespace Alish\Telegram\API;

class MessageEntity extends BaseTelegram
{


    /**
     * @var string $type
     * Type of the entity. Can be mention (username), hashtag, bot_command, url, email, bold (bold text),
     * italic (italic text), code (monowidth string), pre (monowidth block), text_link (for clickable text URLs),
     * text_mention (for users without usernames)
     */
    protected $type;

    /**
     * @var integer $offset
     * Offset in UTF-16 code units to the start of the entity
     */
    protected $offset;

    /**
     * @var integer $length
     * Length of the entity in UTF-16 code units
     */
    protected $length;

    /**
     * @var string|null $url
     * Optional. For “text_link” only, url that will be opened after user taps on the text
     */
    protected $url;

    /**
     * @var User|null $user
     * Optional. For “text_mention” only, the mentioned user
     */
    protected $user;
}
