<?php

namespace Alish\Telegram\API;

class File extends BaseTelegram
{

    /**
     * @var string $file_id
     * Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var integer|null $file_size
     * Optional. File size, if known
     */
    protected $file_size;

    /**
     * @var string|null $file_path
     * Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     */
    protected $file_path;
}
