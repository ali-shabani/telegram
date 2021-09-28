<?php

namespace Alish\Telegram\API;

class InputMediaAnimation extends InputMedia
{

    /**
     * @var integer|null
     * Animation width
     */
    protected ?int $width;

    /**
     * @var integer|null
     * Animation height
     */
    protected ?int $height;

    /**
     * @var integer|null
     * Animation duration
     */
    protected ?int $duration;
}
