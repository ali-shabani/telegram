<?php

namespace Alish\Telegram\API;

class PhotoSize extends BaseTelegram {


    /**
     * @var string $file_id
     * Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var integer $width
     * Photo width
     */
    protected $width;

    /**
     * @var integer $height
     * 	Photo height
     */
    protected $height;

    /**
     * @var integer|null $file_size
     * Optional. File size
     */
    protected $file_size;

}