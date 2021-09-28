<?php


namespace Alish\Telegram\API;


abstract class InputMedia extends TelegramAPI
{
    /**
     * @var string $type
     */
    public string $type;

    /**
     * @var string
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name.
     */
    protected string $media;

    /**
     * @var string|null
     * Caption of the photo to be sent, 0-200 characters
     */
    public ?string $caption;

    /**
     * @var string|null
     * Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
     */
    public ?string $parse_mode;

    /**
     * @var MessageEntity[]|null $caption_entities
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     */
    public ?array $caption_entities;
}