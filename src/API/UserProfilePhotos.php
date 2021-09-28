<?php

namespace Alish\Telegram\API;

class UserProfilePhotos extends TelegramAPI
{

    /**
     * @var integer $total_count
     * Total number of profile pictures the target user has
     */
    protected int $total_count;

    /**
     * @var PhotoSize[][] $photos
     * Requested profile pictures (in up to 4 sizes each)
     */
    protected array $photos;
}
