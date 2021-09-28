<?php

namespace Alish\Telegram\API;

class VideoNote extends TelegramAPI
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
     * @var integer $length
     * Video width and height as defined by sender
     */
    protected int $length;

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
     * @var integer|null $file_size
     * Optional. File size
     */
    protected ?int $file_size;
}
