<?php

namespace Alish\Telegram\API;

class Voice extends BaseTelegram {


    /**
     * @var string $file_id
     * Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var integer $duration
     * Duration of the audio in seconds as defined by sender
     */
    protected $duration;

    /**
     * @var string|null $mime_type
     * Optional. MIME type of the file as defined by sender
     */
    protected $mime_type;

    /**
     * @var integer|null $file_size
     * Optional. File size
     */
    protected $file_size;

}