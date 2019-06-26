<?php

namespace Alish\Telegram\API;

class Sticker extends BaseTelegram
{
    /**
     * @var string
     *             Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var int
     *          Sticker width
     */
    protected $width;

    /**
     * @var int
     *          Sticker height
     */
    protected $height;

    /**
     * @var PhotoSize|null
     *                     Optional. Sticker thumbnail in the .webp or .jpg format
     */
    protected $thumb;

    /**
     * @var string|null
     *                  Optional. Emoji associated with the sticker
     */
    protected $emoji;

    /**
     * @var string|null
     *                  Optional. Name of the sticker set to which the sticker belongs
     */
    protected $set_name;

    /**
     * @var MaskPosition|null
     *                        Optional. For mask stickers, the position where the mask should be placed
     */
    protected $mask_position;

    /**
     * @var int|null
     *               Optional. File size
     */
    protected $file_size;
}
