<?php

namespace Alish\Telegram\API;

class VideoNote extends BaseTelegram
{

    /**
     * @var string $file_id
     * Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var integer $length
     * Video width and height as defined by sender
     */
    protected $length;

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
     * @var integer|null $file_size
     * Optional. File size
     */
    protected $file_size;
}
