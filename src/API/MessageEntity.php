<?php

namespace Alish\Telegram\API;

class MessageEntity extends TelegramAPI
{
    
    /**
     * @var string $type
     * Type of the entity. Can be mention (username), hashtag, bot_command, url, email, bold (bold text),
     * italic (italic text), code (monowidth string), pre (monowidth block), text_link (for clickable text URLs),
     * text_mention (for users without usernames)
     */
    public string $type;

    /**
     * @var integer $offset
     * Offset in UTF-16 code units to the start of the entity
     */
    public int $offset;

    /**
     * @var integer $length
     * Length of the entity in UTF-16 code units
     */
    public int $length;

    /**
     * @var string|null $url
     * Optional. For “text_link” only, url that will be opened after user taps on the text
     */
    public ?string $url;

    /**
     * @var User|null $user
     * Optional. For “text_mention” only, the mentioned user
     */
    public ?User $user;

    /**
     * @var string|null $language
     * Optional. For “pre” only, the programming language of the entity text
     */
    public ?string $language;
}
