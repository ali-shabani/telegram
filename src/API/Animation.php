<?php

namespace Alish\Telegram\API;

class Animation extends TelegramAPI
{

    /**
     * @var string $file_id
     * Unique file identifier
     */
    public string $file_id;

    /**
     * @var string $file_unique_id
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public string $file_unique_id;

    /**
     * @var integer $width
     * Video width as defined by sender
     */
    public int $width;

    /**
     * @var integer $height
     * Video height as defined by sender
     */
    public int $height;

    /**
     * @var integer $duration
     * Duration of the video in seconds as defined by sender
     */
    public int $duration;

    /**
     * @var PhotoSize|null $thumb
     * Optional. Animation thumbnail as defined by sender
     */
    public ?PhotoSize $thumb;

    /**
     * @var string|null $file_name
     * Optional. Original animation filename as defined by sender
     */
    public ?string $file_name;

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
