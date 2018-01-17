<?php

namespace Alish\Telegram\API;

class Sticker extends BaseTelegram {

    /**
     * @var string $file_id
     * Unique identifier for this file
     */
    protected $file_id;

    /**
     * @var integer $width
     * Sticker width
     */
    protected $width;

    /**
     * @var integer $height
     * Sticker height
     */
    protected $height;

    /**
     * @var PhotoSize|null $thumb
     * Optional. Sticker thumbnail in the .webp or .jpg format
     */
    protected $thumb;

    /**
     * @var string|null $emoji
     * Optional. Emoji associated with the sticker
     */
    protected $emoji;

    /**
     * @var string|null $set_name
     * Optional. Name of the sticker set to which the sticker belongs
     */
    protected $set_name;

    /**
     * @var MaskPosition|null $mask_position
     * Optional. For mask stickers, the position where the mask should be placed
     */
    protected $mask_position;

    /**
     * @var integer|null $file_size
     * Optional. File size
     */
    protected $file_size;


}