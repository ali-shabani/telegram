<?php


namespace Alish\Telegram\API;


class Dice extends TelegramAPI
{

    /**
     * @var string $emoji
     * Emoji on which the dice throw animation is based
     */
    public string $emoji;

    /**
     * @var int $value
     * Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
     */
    public int $value;
}