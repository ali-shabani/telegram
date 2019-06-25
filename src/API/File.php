<?php

namespace Alish\Telegram\API;

class File extends BaseTelegram
{
    /**
     * @var string
     *             Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var int|null
     *               Optional. File size, if known
     */
    protected $file_size;

    /**
     * @var string|null
     *                  Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     */
    protected $file_path;
}
