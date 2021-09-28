<?php

namespace Alish\Telegram\API;

class Voice extends TelegramAPI
{
    /**
     * @var string $file_id
     * Unique identifier for this file
     */
    public string $file_id;

    /**
     * @var string $file_unique_id
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public string $file_unique_id;

    /**
     * @var integer $duration
     * Duration of the audio in seconds as defined by sender
     */
    public int $duration;

    /**
     * @var string|null $mime_type
     * Optional. MIME type of the file as defined by sender
     */
    public ?string $mime_type;

    /**
     * @var integer|null $file_size
     * Optional. File size
     */
    public ?int $file_size;
}
