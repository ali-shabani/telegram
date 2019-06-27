<?php

namespace Alish\Telegram\API;

class Document extends BaseTelegram
{

    /**
     * @var string $file_id
     * Unique file identifier
     */
    protected $file_id;

    /**
     * @var PhotoSize|null $thumb
     * Optional. Document thumbnail as defined by sender
     */
    protected $thumb;

    /**
     * @var string|null $file_name
     * Optional. Original filename as defined by sender
     */
    protected $file_name;

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
