<?php

namespace Alish\Telegram\Template;

class InputFile
{
    public static function getFile($path)
    {
        return curl_file_create(realpath($path));
    }
}
