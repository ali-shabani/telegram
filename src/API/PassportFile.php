<?php

namespace Alish\Telegram\API;

class PassportFile extends TelegramAPI
{

    /**
     * @var string
     * Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var integer
     * File size
     */
    protected $file_size;

    /**
     * @var integer
     * Unix time when the file was uploaded
     */
    protected $file_date;
}
