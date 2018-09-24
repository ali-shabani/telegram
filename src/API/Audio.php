<?php

namespace Alish\Telegram\API;


use Alish\Telegram\Parser\ParseAble;

class Audio extends BaseTelegram {

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
     * @var string|null $performer
     * Optional. Performer of the audio as defined by sender or by audio tags
     */
    protected $performer;

    /**
     * @var string|null $title
     * Optional. Title of the audio as defined by sender or by audio tags
     */
    protected $title;

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

    /**
     * @var PhotoSize|null
     * Thumbnail of the album cover to which the music file belongs
     */
    protected $thumb;
}