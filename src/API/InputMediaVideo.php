<?php

namespace Alish\Telegram\API;

class InputMediaVideo extends InputMedia
{
    /**
     * @var integer|null
     * Video width
     */
    protected ?int $width;

    /**
     * @var integer|null
     * Video height
     */
    protected ?int $height;

    /**
     * @var integer|null
     * Video duration
     */
    protected ?int $duration;

    /**
     * @var boolean|null
     * Pass True, if the uploaded video is suitable for streaming
     */
    protected ?bool $supports_streaming;
}
