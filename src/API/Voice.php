<?php

namespace Alish\Telegram\API;

class Voice extends BaseTelegram
{
    /**
     * @var string
     * Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var int
     * Duration of the audio in seconds as defined by sender
     */
    protected $duration;

    /**
     * @var string|null
     * Optional. MIME type of the file as defined by sender
     */
    protected $mime_type;

    /**
     * @var int|null
     * Optional. File size
     */
    protected $file_size;
}
