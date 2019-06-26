<?php

namespace Alish\Telegram\API;

class VideoNote extends BaseTelegram
{
    /**
     * @var string
     *             Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var int
     *          Video width and height as defined by sender
     */
    protected $length;

    /**
     * @var int
     *          Duration of the video in seconds as defined by sender
     */
    protected $duration;

    /**
     * @var PhotoSize|null
     *                     Optional. Video thumbnail
     */
    protected $thumb;

    /**
     * @var int|null
     *               Optional. File size
     */
    protected $file_size;
}
