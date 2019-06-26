<?php

namespace Alish\Telegram\API;

class Animation extends BaseTelegram
{
    /**
     * @var string
     * Unique file identifier
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
     * @var PhotoSize
     * Optional. Animation thumbnail as defined by sender
     */
    protected $thumb;

    /**
     * @var string|null
     * Optional. Original animation filename as defined by sender
     */
    protected $file_name;

    /**
     * @var string|null
     * Optional. MIME type of the file as defined by sender
     */
    protected $mime_type;

    /**
     * @var int
     * Optional. File size
     */
    protected $file_size;
}
