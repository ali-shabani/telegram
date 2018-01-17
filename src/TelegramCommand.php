<?php
/**
 * Created by PhpStorm.
 * User: alish
 * Date: 5/11/17
 * Time: 2:32 AM
 */

namespace Alish\Telegram;


use Alish\Telegram\API\Message;
use Alish\Telegram\Facades\Telegram;

abstract class TelegramCommand
{

    protected $message;
    protected $chatId;
    protected $userId;

    public function __construct(Message $message)
    {
        $this->message = $message;
        $this->chatId = $message->getChat()->getId();
        $this->userId = $message->getFrom()->getId();
    }

    abstract public function handler();

    public function sendMessage($text, $buttons = null)
    {
        Telegram::chatId($this->chatId)->sendMessage(['text' => $text, 'reply_markup' => $buttons]);
    }

}