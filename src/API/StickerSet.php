<?php
/**
 * Created by PhpStorm.
 * User: pyramid
 * Date: 11/15/17
 * Time: 12:11 PM.
 */

namespace Alish\Telegram\API;

class StickerSet extends BaseTelegram
{
    /**
     * @var string
     * Sticker set name
     */
    protected $name;

    /**
     * @var string
     * Sticker set title
     */
    protected $title;

    /**
     * @var bool
     * True, if the sticker set contains masks
     */
    protected $contains_masks;

    /**
     * @var Sticker[]
     * List of all set stickers
     */
    protected $stickers;
}
