<?php

namespace Alish\Telegram\API;

use Alish\Telegram\Parser\ParseAble;

class Audio extends TelegramAPI
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
     * @var integer $duration
     * Duration of the audio in seconds as defined by sender
     */
    public int $duration;

    /**
     * @var string|null $performer
     * Optional. Performer of the audio as defined by sender or by audio tags
     */
    public ?string $performer;

    /**
     * @var string|null $title
     * Optional. Title of the audio as defined by sender or by audio tags
     */
    public ?string $title;

    /**
     * @var string|null $file_name
     * Optional. Original filename as defined by sender
     */
    public ?string $file_name;

    /**
     * @var string|null $mime_type
     * Optional. MIME type of the file as defined by sender
     */
    public ?string $mime_type;

    /**
     * @var integer|null $file_size
     * Optional. File size
     */
    public ?int $file_size;

    /**
     * @var PhotoSize|null
     * Thumbnail of the album cover to which the music file belongs
     */
    public ?PhotoSize $thumb;
}
