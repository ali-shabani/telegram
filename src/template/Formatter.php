<?php

namespace Alish\Telegram\Template;

class Formatter
{
    public static function bold($text, $parseMode)
    {
        if ($parseMode == ParseMode::HTML) {
            return '<b>' . $text . '</b>';
        }
        else if ($parseMode == ParseMode::Markdown) {
            return '*' . $text . '*';
        }
        return null;
    }

    public static function italic($text, $parseMode)
    {
        if ($parseMode == ParseMode::HTML) {
            return '<i>' . $text . '</i>';
        }
        else if ($parseMode == ParseMode::Markdown) {
            return '_' . $text . '_';
        }
        return null;
    }

    public static function link($text, $parseMode, $link)
    {
        if ($parseMode == ParseMode::HTML) {
            return '<a href="' . $link . '" >"' . $text . '</a>';
        }
        else if ($parseMode == ParseMode::Markdown) {
            return '[' . $text . '](' . $link . ')';
        }
        return null;
    }

    public static function code($text, $parseMode)
    {
        if ($parseMode == ParseMode::HTML) {
            return '<code>' . $text . '</code>';
        }
        else if ($parseMode == ParseMode::Markdown) {
            return '`' . $text . '`';
        }
        return null;
    }

    public static function pre($text, $parseMode)
    {
        if ($parseMode == ParseMode::HTML) {
            return '<pre>' . $text . '</pre>';
        }
        else if ($parseMode == ParseMode::Markdown) {
            return '```' . $text . '```';
        }
        return null;
    }
}

