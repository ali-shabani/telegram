<?php

namespace Alish\Telegram\API;

class PhotoSize extends BaseTelegram
{
    /**
     * @var string
     * Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var int
     * Photo width
     */
    protected $width;

    /**
     * @var int
     * 	Photo height
     */
    protected $height;

    /**
     * @var int|null
     * Optional. File size
     */
    protected $file_size;
}
