<?php

namespace Alish\Telegram\API;

/**
 * This object represents a message.
 */
class Message extends BaseTelegram
{
    /**
     * @var int
     * Unique message identifier inside this chat
     */
    protected $message_id;

    /**
     * @var User|null
     * Telegram, empty for messages sent to channels
     */
    protected $from;

    /**
     * @var int
     * Date the message was sent in Unix time
     */
    protected $date;

    /**
     * @var Chat
     * Conversation the message belongs to
     */
    protected $chat;

    /**
     * @var User|null
     * For forwarded messages, sender of the original message
     */
    protected $forward_from;

    /**
     * @var Chat|null
     * For messages forwarded from channels, information about the original channel
     */
    protected $forward_from_chat;

    /**
     * @var int|null
     * For messages forwarded from channels, identifier of the original message in the channel
     */
    protected $forward_from_message_id;

    /**
     * @var string|null
     * For messages forwarded from channels, signature of the post author if present
     */
    protected $forward_signature;

    /**
     * @var int|null
     * For forwarded messages, date the original message was sent in Unix time
     */
    protected $forward_date;

    /**
     * @var Message|null
     * For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     */
    protected $reply_to_message;

    /**
     * @var int|null
     * Date the message was last edited in Unix time
     */
    protected $edit_date;

    /**
     * @var string|null
     * The unique identifier of a media message group this message belongs to
     */
    protected $media_group_id;

    /**
     * @var string|null
     * Signature of the post author for messages in channel
     */
    protected $author_signature;

    /**
     * @var string|null
     * For text messages, the actual UTF-8 text of the message, 0-4096 characters.
     */
    protected $text;

    /**
     * @var MessageEntity[]|null
     * For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     */
    protected $entities;

    /**
     * @var MessageEntity[]|null
     *  For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     */
    protected $caption_entities;

    /**
     * @var Audio|null
     * Message is an audio file, information about the file
     */
    protected $audio;

    /**
     * @var Document|null
     * Message is a general file, information about the file
     */
    protected $document;

    /**
     * @var Animation|null
     * Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
     */
    protected $animation;

    /**
     * @var Game|null
     * Message is a game, information about the game
     */
    protected $game;

    /**
     * @var PhotoSize[]|null
     * Message is a photo, available sizes of the photo
     */
    protected $photo;

    /**
     * @var Sticker|null
     * Message is a sticker, information about the sticker
     */
    protected $sticker;

    /**
     * @var Video|null
     * Message is a video, information about the video
     */
    protected $video;

    /**
     * @var Voice|null
     * Message is a voice message, information about the file
     */
    protected $voice;

    /**
     * @var VideoNote|null
     * Message is a video note, information about the video message
     */
    protected $video_note;

    /**
     * @var string|null
     * Caption for the audio, document, photo, video or voice, 0-200 characters
     */
    protected $caption;

    /**
     * @var Contact|null
     * Message is a shared contact, information about the contact
     */
    protected $contact;

    /**
     * @var Location|null
     * Message is a shared location, information about the location
     */
    protected $location;

    /**
     * @var Venue|null
     * Message is a venue, information about the venue
     */
    protected $venue;

    /**
     * @var User[]|null
     * New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     */
    protected $new_chat_member;

    /**
     * @var User|null
     * A member was removed from the group, information about them (this member may be the bot itself)
     */
    protected $left_chat_member;

    /**
     * @var string|null
     * A chat title was changed to this value
     */
    protected $new_chat_title;

    /**
     * @var PhotoSize[]|null
     * A chat photo was change to this value
     */
    protected $new_chat_photo;

    /**
     * @var true|null
     * Service message: the chat photo was deleted
     */
    protected $delete_chat_photo;

    /**
     * @var true|null
     * Service message: the group has been created
     */
    protected $group_chat_created;

    /**
     * @var true|null
     * Service message: the supergroup has been created.
     * This field can‘t be received in a message coming through updates, because bot can’t be a member of a supergroup when it is created.
     * It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     */
    protected $supergroup_chat_created;

    /**
     * @var true|null
     * Service message: the channel has been created.
     * This field can‘t be received in a message coming through updates, because bot can’t be a member of a channel when it is created.
     * It can only be found in reply_to_message if someone replies to a very first message in a channel.
     */
    protected $channel_chat_created;

    /**
     * @var int|null
     * The group has been migrated to a supergroup with the specified identifier.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     */
    protected $migrate_to_chat_id;

    /**
     * @var int|null
     * The supergroup has been migrated from a group with the specified identifier.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     */
    protected $migrate_from_chat_id;

    /**
     * @var Message|null
     * Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
     */
    protected $pinned_message;

    /**
     * @var Invoice|null
     * Message is an invoice for a payment, information about the invoice.
     */
    protected $invoice;

    /**
     * @var SuccessfulPayment|null
     * Message is a service message about a successful payment, information about the payment.
     */
    protected $successful_payment;

    /**
     * @var string|null
     * The domain name of the website on which the user has logged in
     */
    protected $connected_website;

    /**
     * @var PassportData|null
     * Telegram Passport data
     */
    protected $passport_data;

    /**
     * @var InlineKeyboardMarkup|null
     * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     */
    protected $reply_markup;
}
