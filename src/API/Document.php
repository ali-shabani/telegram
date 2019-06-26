<?php

namespace Alish\Telegram\API;

class Document extends BaseTelegram
{
    /**
     * @var string
     *             Unique file identifier
     */
    protected $file_id;

    /**
     * @var PhotoSize|null
     *                     Optional. Document thumbnail as defined by sender
     */
    protected $thumb;

    /**
     * @var string|null
     *                  Optional. Original filename as defined by sender
     */
    protected $file_name;

    /**
     * @var string|null
     *                  Optional. MIME type of the file as defined by sender
     */
    protected $mime_type;

    /**
     * @var int|null
     *               Optional. File size
     */
    protected $file_size;
}
