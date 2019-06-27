<?php


namespace Alish\Telegram;

use Alish\Telegram\Facades\Telegram;

trait TelegramMethods
{

    /**
     * @param  string  $text
     * @param  array  $options
     * @return mixed
     */
    public function sendMessage(string $text, array $options = [])
    {
        $data = array_merge(
            [
                'text' => $text,
                'parse_mode' => $this->parseMode()
            ],
            $options
        );

        return Telegram::chatId($this->chatId())
            ->sendMessage($data);
    }

    public function editMessage(int $id, string $text, array $options = [])
    {
        $data = array_merge(
            [
                'text' => $text,
                'message_id' => $id,
                'parse_mode' => $this->parseMode()
            ],
            $options
        );

        return Telegram::chatId($this->chatId())
            ->editMessageText($data);
    }

    /**
     * @param  resource|string  $photo
     * @param  string  $caption
     * @param  array  $options
     * @return mixed
     */
    public function sendPhoto($photo, string $caption, array $options = [])
    {
        $data = array_merge(
            [
                'photo' => $photo,
                'caption' => $caption,
                'parse_mode' => $this->parseMode()
            ],
            $options
        );

        return Telegram::chatId($this->chatId())
            ->sendPhoto($data);
    }

    /**
     * @param  resource|string  $video
     * @param  string  $caption
     * @param  array  $options
     * @return mixed
     */
    public function sendVideo($video, string $caption, array $options = [])
    {
        $data = array_merge(
            [
                'photo' => $video,
                'caption' => $caption,
                'parse_mode' => $this->parseMode()
            ],
            $options
        );

        return Telegram::chatId($this->chatId())
            ->sendVideo($data);
    }

    /**
     * parseMode of text
     *
     * @return string
     */
    public function parseMode() : string
    {
        return property_exists($this, 'parseMode') ? $this->parseMode : config('telegram.options.parse_mode', 'Markdown');
    }
}
