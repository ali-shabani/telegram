<?php

namespace Alish\Telegram\API;

class PassportData extends BaseTelegram
{
    /**
     * @var EncryptedPassportElement[]
     *                                 Array with information about documents and other Telegram Passport elements that was shared with the bot
     */
    protected $data;

    /**
     * @var EncryptedCredentials
     *                           Encrypted credentials required to decrypt the data
     */
    protected $credential;
}
