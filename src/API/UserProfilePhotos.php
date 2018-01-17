<?php

namespace Alish\Telegram\API;

class UserProfilePhotos extends BaseTelegram {

    /**
     * @var integer $total_count
     * Total number of profile pictures the target user has
     */
    protected $total_count;

    /**
     * @var PhotoSize[][] $photos
     * Requested profile pictures (in up to 4 sizes each)
     */
    protected $photos;

}