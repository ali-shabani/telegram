<?php
/**
 * Created by PhpStorm.
 * User: alish
 * Date: 9/24/18
 * Time: 9:00 AM
 */

namespace Alish\Telegram\API;

use Alish\Telegram\Template\InputFile;

class InputMediaAnimation extends BaseTelegram
{
    /**
     * @var string
     * Type of the result, must be animation
     */
    protected $type;

    /**
     * @var string
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name.
     */
    protected $media;

    /**
     * @var InputFile|string|null
     * Thumbnail of the file sent. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail‘s width and height should not exceed 90. Ignored if the file is not uploaded using multipart/form-data.
     * Thumbnails can’t be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>.
     */
    protected $thumb;

    /**
     * @var string|null
     * Caption of the animation to be sent, 0-200 characters
     */
    protected $caption;

    /**
     * @var string|null
     * Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
     */
    protected $parse_mode;

    /**
     * @var integer|null
     * Animation width
     */
    protected $width;

    /**
     * @var integer|null
     * Animation height
     */
    protected $height;

    /**
     * @var integer|null
     * Animation duration
     */
    protected $duration;
}
