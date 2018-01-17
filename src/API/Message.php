<?php

namespace Alish\Telegram\API;

/**
 * This object represents a message.
 * @package Alish\Telegram\API
 *
 */
Class Message extends BaseTelegram {

    /**
     * @var integer $message_id
     * Unique message identifier inside this chat
     */
    protected $message_id;

    /**
     * @var User|null $from
     * Sender, empty for messages sent to channels
     */
    protected $from;

    /**
     * @var integer $date
     * Date the message was sent in Unix time
     */
    protected $date;

    /**
     * @var Chat $chat
     * Conversation the message belongs to
     */
    protected $chat;

    /**
     * @var User|null $forward_from
     * For forwarded messages, sender of the original message
     */
    protected $forward_from;

    /**
     * @var Chat|null $forward_from_chat
     * For messages forwarded from channels, information about the original channel
     */
    protected $forward_from_chat;

    /**
     * @var integer|null $forward_from_message_id
     * For messages forwarded from channels, identifier of the original message in the channel
     */
    protected $forward_from_message_id;

    /**
     * @var string|null $forward_signature
     * For messages forwarded from channels, signature of the post author if present
     */
    protected $forward_signature;

    /**
     * @var integer|null $forward_date
     * For forwarded messages, date the original message was sent in Unix time
     */
    protected $forward_date;

    /**
     * @var Message|null $reply_to_message
     * For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     */
    protected $reply_to_message;

    /**
     * @var integer|null $edit_date
     * Date the message was last edited in Unix time
     */
    protected $edit_date;

    /**
     * @var string|null $author_signature
     * Signature of the post author for messages in channel
     */
    protected $author_signature;

    /**
     * @var string|null $text
     * For text messages, the actual UTF-8 text of the message, 0-4096 characters.
     */
    protected $text;

    /**
     * @var MessageEntity[]|null $entities
     * For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     */
    protected $entities;

    /**
     * @var MessageEntity[]|null $caption_entities
     *  For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     */
    protected $caption_entities;

    /**
     * @var Audio|null $audio
     * Message is an audio file, information about the file
     */
    protected $audio;

    /**
     * @var Document|null $document
     * Message is a general file, information about the file
     */
    protected $document;

    /**
     * @var Game|null
     * Message is a game, information about the game
     */
    protected $game;

    /**
     * @var PhotoSize[]|null $photo
     * Message is a photo, available sizes of the photo
     */
    protected $photo;

    /**
     * @var Sticker|null $sticker
     * Message is a sticker, information about the sticker
     */
    protected $sticker;

    /**
     * @var Video|null $video
     * Message is a video, information about the video
     */
    protected $video;

    /**
     * @var Voice|null $voice
     * Message is a voice message, information about the file
     */
    protected $voice;

    /**
     * @var VideoNote|null $video_note
     * Message is a video note, information about the video message
     */
    protected $video_note;

    /**
     * @var string|null $caption
     * Caption for the audio, document, photo, video or voice, 0-200 characters
     */
    protected $caption;

    /**
     * @var Contact|null $contact
     * Message is a shared contact, information about the contact
     */
    protected $contact;

    /**
     * @var Location|null $location
     * Message is a shared location, information about the location
     */
    protected $location;

    /**
     * @var Venue|null $venue
     * Message is a venue, information about the venue
     */
    protected $venue;

    /**
     * @var User[]|null $new_chat_member
     * New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     */
    protected $new_chat_member;

    /**
     * @var User|null $left_chat_member
     * A member was removed from the group, information about them (this member may be the bot itself)
     */
    protected $left_chat_member;

    /**
     * @var string|null $new_chat_title
     * A chat title was changed to this value
     */
    protected $new_chat_title;

    /**
     * @var PhotoSize[]|null $new_chat_photo
     * A chat photo was change to this value
     */
    protected $new_chat_photo;

    /**
     * @var true|null $delete_chat_photo
     * Service message: the chat photo was deleted
     */
    protected $delete_chat_photo;

    /**
     * @var true|null $group_chat_created
     * Service message: the group has been created
     */
    protected $group_chat_created;

    /**
     * @var true|null $supergroup_chat_created
     * Service message: the supergroup has been created.
     * This field can‘t be received in a message coming through updates, because bot can’t be a member of a supergroup when it is created.
     * It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     */
    protected $supergroup_chat_created;

    /**
     * @var true|null $channel_chat_created
     * Service message: the channel has been created.
     * This field can‘t be received in a message coming through updates, because bot can’t be a member of a channel when it is created.
     * It can only be found in reply_to_message if someone replies to a very first message in a channel.
     */
    protected $channel_chat_created;

    /**
     * @var integer|null $migrate_to_chat_id
     * The group has been migrated to a supergroup with the specified identifier.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     */
    protected $migrate_to_chat_id;

    /**
     * @var integer|null $migrate_from_chat_id
     * The supergroup has been migrated from a group with the specified identifier.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     */
    protected $migrate_from_chat_id;

    /**
     * @var Message|null $pinned_message
     * Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
     */
    protected $pinned_message;

    /**
     * @var Invoice|null $invoice
     * Message is an invoice for a payment, information about the invoice.
     */
    protected $invoice;

    /**
     * @var SuccessfulPayment|null $successful_payment
     * Message is a service message about a successful payment, information about the payment.
     */
    protected $successful_payment;

}