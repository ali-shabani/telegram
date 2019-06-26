<?php

namespace Alish\Telegram\API;

class UserProfilePhotos extends BaseTelegram
{
    /**
     * @var int
     * Total number of profile pictures the target user has
     */
    protected $total_count;

    /**
     * @var PhotoSize[][]
     * Requested profile pictures (in up to 4 sizes each)
     */
    protected $photos;
}
