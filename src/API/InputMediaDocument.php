<?php

namespace Alish\Telegram\API;

class InputMediaDocument extends InputMedia
{

    /**
     * @var bool|null $disable_content_type_detection
     * Optional. Disables automatic server-side content type detection for files uploaded using multipart/form-data.
     * Always true, if the document is sent as part of an album.
     */
    public ?bool $disable_content_type_detection;
}
