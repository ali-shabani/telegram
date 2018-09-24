<?php
/**
 * Created by PhpStorm.
 * User: alish
 * Date: 9/24/18
 * Time: 8:24 AM
 */

namespace Alish\Telegram\API;


class EncryptedPassportElement extends BaseTelegram
{
    /**
     * @var string
     * Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”,
     * “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
     */
    protected $type;

    /**
     * @var string|null
     * Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types.
     * Can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    protected $data;

    /**
     * @var string|null
     * User's verified phone number, available only for “phone_number” type
     */
    protected $phone_number;

    /**
     * @var string|null
     * User's verified email address, available only for “email” type
     */
    protected $email;

    /**
     * @var PassportFile[]|null
     * Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types.
     * Files can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    protected $files;

    /**
     * @var PassportFile|null
     * Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver_license”, “identity_card” and “internal_passport”.
     * The file can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    protected $front_side;

    /**
     * @var PassportFile
     * Encrypted file with the reverse side of the document, provided by the user. Available for “driver_license” and “identity_card”.
     * The file can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    protected $reverse_side;

    /**
     * @var PassportFile
     * Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver_license”, “identity_card” and “internal_passport”.
     * The file can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    protected $selfie;

    /**
     * @var PassportFile[]|null
     * Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types.
     * Files can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    protected $translation;

    /**
     * @var string
     * Base64-encoded element hash for using in PassportElementErrorUnspecified
     */
    protected $hash;

}