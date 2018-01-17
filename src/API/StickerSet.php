<?php
/**
 * Created by PhpStorm.
 * User: pyramid
 * Date: 11/15/17
 * Time: 12:11 PM
 */

namespace Alish\Telegram\API;


class StickerSet extends BaseTelegram
{

    /**
     * @var string $name
     * Sticker set name
     */
    protected $name;

    /**
     * @var string $title
     * Sticker set title
     */
    protected $title;

    /**
     * @var boolean $contains_masks
     * True, if the sticker set contains masks
     */
    protected $contains_masks;

    /**
     * @var Sticker[] $stickers
     * List of all set stickers
     */
    protected $stickers;

}