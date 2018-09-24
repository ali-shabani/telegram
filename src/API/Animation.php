<?php

namespace Alish\Telegram\API;


class Animation extends BaseTelegram
{

    /**
     * @var string $file_id
     * Unique file identifier
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
     * @var PhotoSize $thumb
     * Optional. Animation thumbnail as defined by sender
     */
    protected $thumb;

    /**
     * @var string|null $file_name
     * Optional. Original animation filename as defined by sender
     */
    protected $file_name;

    /**
     * @var string|null $mime_type
     * Optional. MIME type of the file as defined by sender
     */
    protected $mime_type;

    /**
     * @var integer $file_size
     * Optional. File size
     */
    protected $file_size;

}