<?php
/**
 * Created by PhpStorm.
 * User: Alish
 * Date: 1/6/2017
 * Time: 1:18 PM.
 */

namespace Alish\Telegram\Http;

class TelegramRequest
{
    public static function request($data, $method)
    {
        //dd($data);
        $tokenBot = config('telegram.defaults.token_bot');
        $url = 'https://api.telegram.org/bot'.$tokenBot.'/'.$method;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        //curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        //dd(json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result);
        //return \GuzzleHttp\json_decode($result);
    }
}
