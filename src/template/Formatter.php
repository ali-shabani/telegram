<?php

namespace Alish\Telegram\Template;

class Formatter
{
    public static function bold($text, $parseMode)
    {
        if ($parseMode == ParseMode::HTML) {
            return '<b>'.$text.'</b>';
        } elseif ($parseMode == ParseMode::Markdown) {
            return '*'.$text.'*';
        }
    }

    public static function italic($text, $parseMode)
    {
        if ($parseMode == ParseMode::HTML) {
            return '<i>'.$text.'</i>';
        } elseif ($parseMode == ParseMode::Markdown) {
            return '_'.$text.'_';
        }
    }

    public static function link($text, $parseMode, $link)
    {
        if ($parseMode == ParseMode::HTML) {
            return '<a href="'.$link.'" >"'.$text.'</a>';
        } elseif ($parseMode == ParseMode::Markdown) {
            return '['.$text.']('.$link.')';
        }
    }

    public static function code($text, $parseMode)
    {
        if ($parseMode == ParseMode::HTML) {
            return '<code>'.$text.'</code>';
        } elseif ($parseMode == ParseMode::Markdown) {
            return '`'.$text.'`';
        }
    }

    public static function pre($text, $parseMode)
    {
        if ($parseMode == ParseMode::HTML) {
            return '<pre>'.$text.'</pre>';
        } elseif ($parseMode == ParseMode::Markdown) {
            return '```'.$text.'```';
        }
    }
}
