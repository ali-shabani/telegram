<?php

namespace Alish\Telegram\API;

class InputMediaPhoto extends BaseTelegram
{
    /**
     * @var string
     *             Type of the result, must be photo
     */
    protected $type;

    /**
     * @var string
     *             File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
     *             pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More info on Sending Files »
     */
    protected $media;

    /**
     * @var string|null
     *                  Caption of the photo to be sent, 0-200 characters
     */
    protected $caption;

    /**
     * @var string|null
     *                  Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
     */
    protected $parse_mode;
}
