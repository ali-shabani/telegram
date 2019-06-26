<?php

namespace Alish\Telegram\API;

class Video extends BaseTelegram
{
    /**
     * @var string
     * Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var int
     * Video width as defined by sender
     */
    protected $width;

    /**
     * @var int
     * Video height as defined by sender
     */
    protected $height;

    /**
     * @var int
     * Duration of the video in seconds as defined by sender
     */
    protected $duration;

    /**
     * @var PhotoSize|null
     * Optional. Video thumbnail
     */
    protected $thumb;

    /**
     * @var string|null
     * Optional. Mime type of a file as defined by sender
     */
    protected $mime_type;

    /**
     * @var int|null
     * Optional. File size
     */
    protected $file_size;
}
