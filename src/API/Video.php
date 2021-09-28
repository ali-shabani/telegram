<?php

namespace Alish\Telegram\API;

class Video extends TelegramAPI
{

    /**
     * @var string $file_id
     * Unique identifier for this file
     */
    protected string $file_id;

    /**
     * @var string $file_unique_id
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public string $file_unique_id;

    /**
     * @var integer $width
     * Video width as defined by sender
     */
    protected int $width;

    /**
     * @var integer $height
     * Video height as defined by sender
     */
    protected int $height;

    /**
     * @var integer $duration
     * Duration of the video in seconds as defined by sender
     */
    protected int $duration;

    /**
     * @var PhotoSize|null $thumb
     * Optional. Video thumbnail
     */
    protected ?PhotoSize $thumb;

    /**
     * @var string|null $file_name
     * Optional. Original filename as defined by sender
     */
    public ?string $file_name;

    /**
     * @var string|null $mime_type
     * Optional. Mime type of a file as defined by sender
     */
    protected ?string $mime_type;

    /**
     * @var integer|null $file_size
     * Optional. File size
     */
    protected ?int $file_size;
}
