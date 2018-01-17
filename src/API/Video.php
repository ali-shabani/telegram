<?php

namespace Alish\Telegram\API;

class Video extends BaseTelegram {

    /**
     * @var string $file_id
     * Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var integer $width
     * Video width as defined by sender
     */
    protected $width;

    /**
     * @var integer $height
     * Video height as defined by sender
     */
    protected $height;

    /**
     * @var integer $duration
     * Duration of the video in seconds as defined by sender
     */
    protected $duration;

    /**
     * @var PhotoSize|null $thumb
     * Optional. Video thumbnail
     */
    protected $thumb;

    /**
     * @var string|null $mime_type
     * Optional. Mime type of a file as defined by sender
     */
    protected $mime_type;

    /**
     * @var integer|null $file_size
     * Optional. File size
     */
    protected $file_size;
}