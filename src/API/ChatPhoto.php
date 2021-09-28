<?php

namespace Alish\Telegram\API;

class ChatPhoto extends TelegramAPI
{

    /**
     * @var string $small_file_id
     * Unique file identifier of small (160x160) chat photo. This file_id can be used only for photo download.
     */
    public string $small_file_id;

    /**
     * @var string $small_file_unique_id
     * Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file
     */
    public string $small_file_unique_id;
    
    /**
     * @var string $big_file_id
     * Unique file identifier of big (640x640) chat photo. This file_id can be used only for photo download.
     */
    public string $big_file_id;

    /**
     * @var string $big_file_unique_id
     * Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public string $big_file_unique_id;
}
