<?php

namespace Alish\Telegram\API;

class PhotoSize extends TelegramAPI
{


    /**
     * @var string $file_id
     * Unique identifier for this file
     */
    public string $file_id;

    /**
     * @var string $file_unique_id
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file
     */
    public string $file_unique_id;

    /**
     * @var integer $width
     * Photo width
     */
    public int $width;

    /**
     * @var integer $height
     * 	Photo height
     */
    public int $height;

    /**
     * @var integer|null $file_size
     * Optional. File size
     */
    public ?int $file_size;
}
