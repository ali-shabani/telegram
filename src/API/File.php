<?php

namespace Alish\Telegram\API;

class File extends TelegramAPI
{

    /**
     * @var string $file_id
     * Unique identifier for this file
     */
    public string $file_id;

    /**
     * @var string $file_unique_id
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public string $file_unique_id;
    
    /**
     * @var integer|null $file_size
     * Optional. File size, if known
     */
    public ?int $file_size;

    /**
     * @var string|null $file_path
     * Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     */
    public ?string $file_path;
}
