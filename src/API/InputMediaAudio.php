<?php

namespace Alish\Telegram\API;

class InputMediaAudio extends InputMedia
{
    /**
     * @var integer|null
     * Duration of the audio in seconds
     */
    protected ?int $duration;

    /**
     * @var string|null
     * Performer of the audio
     */
    protected ?string $performer;

    /**
     * @var string|null
     * Title of the audio
     */
    protected ?string $title;
}
