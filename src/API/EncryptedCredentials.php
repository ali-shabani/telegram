<?php

namespace Alish\Telegram\API;

class EncryptedCredentials extends TelegramAPI
{

    /**
     * @var string
     * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
     */
    protected $data;

    /**
     * @var string
     * Base64-encoded data hash for data authentication
     */
    protected $hash;

    /**
     * @var string
     * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     */
    protected $secret;
}
