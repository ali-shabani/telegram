<?php

namespace Alish\Telegram\API;

class PassportFile extends BaseTelegram
{
    /**
     * @var string
     * Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var int
     * File size
     */
    protected $file_size;

    /**
     * @var int
     * Unix time when the file was uploaded
     */
    protected $file_date;
}
