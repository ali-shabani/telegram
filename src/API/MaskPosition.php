<?php
/**
 * Created by PhpStorm.
 * User: pyramid
 * Date: 11/14/17
 * Time: 10:06 PM.
 */

namespace Alish\Telegram\API;

class MaskPosition extends BaseTelegram
{
    /**
     * @var string
     * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
     */
    protected $point;

    /**
     * @var float
     * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
     */
    protected $x_shift;

    /**
     * @var float
     * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
     */
    protected $y_shift;

    /**
     * @var float
     * Mask scaling coefficient. For example, 2.0 means double size.
     */
    protected $scale;
}
