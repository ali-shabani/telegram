<?php
/**
 * Created by PhpStorm.
 * User: Alish
 * Date: 1/6/2017
 * Time: 4:12 PM
 */

namespace Alish\Telegram\Template;


class InputFile
{
    public static function getFile($path)
    {
        return curl_file_create(realpath($path));
    }
}