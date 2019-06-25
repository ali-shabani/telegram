<?php

namespace Alish\Telegram;

use Alish\Telegram\API\User;
use Alish\Telegram\Http\TelegramRequest;
use Alish\Telegram\Parser\Parser;

class Telegram
{
    private $chatId;
    private $user;

    public function chatId($chatId)
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function __call($method, $args)
    {
        // available methods
        /*
         * getUpdates
         * getMe
         * getUserProfilePhotos
         * getFile
         * sendMessage
         * forwardMessage
         * forwardMessage
         * sendPhoto
         * sendAudio
         * sendDocument
         * sendSticker
         * sendVideo
         * sendVoice
         * sendLocation
         * sendVenue
         * sendContact
         * sendChatAction
         * kickChatMember
         * unbanChatMember
         * getChat
         * getChatAdministrators
         * getChatMembersCount
         * getChatMember
         * answerCallbackQuery
         * editMessageText
         * answerCallbackQuery
         * editMessageText
         * editMessageReplyMarkup
         *
         */

        isset($args[0]) ? $model = $args[0] : $model = null;
        isset($args[1]) ? $request = $args[1] : $request = null;

        if (count($args) == 1 && is_array($args[0])) {
            $request = $args[0];
            $model = null;
        }

        if ($this->chatId) {
            $request['chat_id'] = $this->chatId;
        }

        $response = TelegramRequest::request($request, $method);

        if (!$response) {
            return;
        }

        if ($response->ok == true) {
            if (is_bool($response->result) || is_null($model)) {
                return $response->result;
            }

            if (is_array($response->result)) {
                $results = collect();
                foreach ($response->result as $result) {
                    $results->push($this->jsonMapper($result, $model));
                }

                return $results;
            }

            return $this->jsonMapper($response->result, $model);
        }
    }

    protected function jsonMapper($inputs, $class)
    {
        $result = Parser::parse($class, $inputs);

        return $result;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }
}
