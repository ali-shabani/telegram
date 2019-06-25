<?php

namespace Alish\Telegram\API;

class Audio extends BaseTelegram
{
    /**
     * @var string
     *             Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var int
     *          Duration of the audio in seconds as defined by sender
     */
    protected $duration;

    /**
     * @var string|null
     *                  Optional. Performer of the audio as defined by sender or by audio tags
     */
    protected $performer;

    /**
     * @var string|null
     *                  Optional. Title of the audio as defined by sender or by audio tags
     */
    protected $title;

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

    /**
     * @var PhotoSize|null
     *                     Thumbnail of the album cover to which the music file belongs
     */
    protected $thumb;
}
