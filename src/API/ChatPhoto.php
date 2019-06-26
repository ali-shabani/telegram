<?php

namespace Alish\Telegram\API;

class ChatPhoto extends BaseTelegram
{
    /**
     * @var string
     * Unique file identifier of small (160x160) chat photo. This file_id can be used only for photo download.
     */
    protected $small_file_id;

    /**
     * @var string
     * Unique file identifier of big (640x640) chat photo. This file_id can be used only for photo download.
     */
    protected $big_file_id;
}
