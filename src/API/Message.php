<?php

namespace Alish\Telegram\API;

/**
 * This object represents a message.
 * @package Alish\Telegram\API
 *
 */
class Message extends TelegramAPI
{

    /**
     * @var integer $message_id
     * Unique message identifier inside this chat
     */
    public int $message_id;

    /**
     * @var User|null $from
     * Telegram, empty for messages sent to channels
     */
    public ?User $from;

    /**
     * @var Chat|null $sender_chat
     * Optional. Sender of the message, sent on behalf of a chat. The channel itself for channel messages. The supergroup itself for messages from anonymous group administrators.
     * The linked channel for messages automatically forwarded to the discussion group
     */
    public ?Chat $sender_chat;

    /**
     * @var integer $date
     * Date the message was sent in Unix time
     */
    public int $date;

    /**
     * @var Chat $chat
     * Conversation the message belongs to
     */
    public Chat $chat;

    /**
     * @var User|null $forward_from
     * For forwarded messages, sender of the original message
     */
    public ?User $forward_from;

    /**
     * @var Chat|null $forward_from_chat
     * For messages forwarded from channels, information about the original channel
     */
    public ?Chat $forward_from_chat;

    /**
     * @var integer|null $forward_from_message_id
     * For messages forwarded from channels, identifier of the original message in the channel
     */
    public ?int $forward_from_message_id;

    /**
     * @var string|null $forward_signature
     * For messages forwarded from channels, signature of the post author if present
     */
    public ?string $forward_signature;

    /**
     * @var string|null $forward_sender_name
     * Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
     */
    public ?string $forward_sender_name;

    /**
     * @var integer|null $forward_date
     * For forwarded messages, date the original message was sent in Unix time
     */
    public ?int $forward_date;

    /**
     * @var Message|null $reply_to_message
     * For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     */
    public ?Message $reply_to_message;

    /**
     * @var User|null $via_bot
     * Optional. Bot through which the message was sent
     */
    public ?User $via_bot;

    /**
     * @var integer|null $edit_date
     * Date the message was last edited in Unix time
     */
    public ?int $edit_date;

    /**
     * @var string|null $edit_date
     * The unique identifier of a media message group this message belongs to
     */
    public ?string $media_group_id;

    /**
     * @var string|null $author_signature
     * Signature of the post author for messages in channel
     */
    public ?string $author_signature;

    /**
     * @var string|null $text
     * For text messages, the actual UTF-8 text of the message, 0-4096 characters.
     */
    public ?string $text;

    /**
     * @var MessageEntity[]|null $entities
     * For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     */
    public ?array $entities;

    /**
     * @var Animation|null $animation
     * Optional. Message is an animation, information about the animation.
     * For backward compatibility, when this field is set, the document field will also be set
     */
    public ?Animation $animation;

    /**
     * @var Audio|null $audio
     * Message is an audio file, information about the file
     */
    public ?Audio $audio;

    /**
     * @var Document|null $document
     * Message is a general file, information about the file
     */
    public ?Document $document;

    /**
     * @var PhotoSize[]|null $photo
     * Message is a photo, available sizes of the photo
     */
    public ?array $photo;

    /**
     * @var Sticker|null $sticker
     * Message is a sticker, information about the sticker
     */
    public ?Sticker $sticker;

    /**
     * @var Video|null $video
     * Message is a video, information about the video
     */
    public ?Video $video;

    /**
     * @var VideoNote|null $video_note
     * Optional. Message is a video note, information about the video message
     */
    public ?VideoNote $video_note;

    /**
     * @var Voice|null $voice
     * Message is a voice message, information about the file
     */
    public ?Voice $voice;

    /**
     * @var string|null $caption
     * Caption for the audio, document, photo, video or voice, 0-200 characters
     */
    public ?string $caption;

    /**
     * @var MessageEntity[]|null $caption_entities
     *  For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     */
    public ?array $caption_entities;

    /**
     * @var Contact|null $contact
     * Message is a shared contact, information about the contact
     */
    public ?Contact $contact;

    /**
     * @var Dice|null $dice
     * Optional. Message is a dice with random value
     */
    public ?Dice $dice;

    /**
     * @var Game|null
     * Message is a game, information about the game
     */
    public ?Game $game;

    /**
     * @var Poll|null $poll
     * Optional. Message is a native poll, information about the poll
     */
    public ?Poll $poll;

    /**
     * @var Venue|null $venue
     * Message is a venue, information about the venue
     */
    public ?Venue $venue;

    /**
     * @var Location|null $location
     * Message is a shared location, information about the location
     */
    public ?Location $location;

    /**
     * @var User[]|null $new_chat_member
     * New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     */
    public ?array $new_chat_member;

    /**
     * @var User|null $left_chat_member
     * A member was removed from the group, information about them (this member may be the bot itself)
     */
    public ?User $left_chat_member;

    /**
     * @var string|null $new_chat_title
     * A chat title was changed to this value
     */
    public ?string $new_chat_title;

    /**
     * @var PhotoSize[]|null $new_chat_photo
     * A chat photo was change to this value
     */
    public ?array $new_chat_photo;

    /**
     * @var true|null $delete_chat_photo
     * Service message: the chat photo was deleted
     */
    public $delete_chat_photo;

    /**
     * @var true|null $group_chat_created
     * Service message: the group has been created
     */
    public $group_chat_created;

    /**
     * @var true|null $supergroup_chat_created
     * Service message: the supergroup has been created.
     * This field can‘t be received in a message coming through updates, because bot can’t be a member of a supergroup when it is created.
     * It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     */
    public $supergroup_chat_created;

    /**
     * @var true|null $channel_chat_created
     * Service message: the channel has been created.
     * This field can‘t be received in a message coming through updates, because bot can’t be a member of a channel when it is created.
     * It can only be found in reply_to_message if someone replies to a very first message in a channel.
     */
    public $channel_chat_created;

    /**
     * @var MessageAutoDeleteTimerChanged|null $message_auto_delete_timer_changed
     * 	Optional. Service message: auto-delete timer settings changed in the chat
     */
    public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed;

    /**
     * @var integer|null $migrate_to_chat_id
     * The group has been migrated to a supergroup with the specified identifier.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     */
    public ?int $migrate_to_chat_id;

    /**
     * @var integer|null $migrate_from_chat_id
     * The supergroup has been migrated from a group with the specified identifier.
     * This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     */
    public ?int $migrate_from_chat_id;

    /**
     * @var Message|null $pinned_message
     * Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
     */
    public ?Message $pinned_message;

    /**
     * @var Invoice|null $invoice
     * Message is an invoice for a payment, information about the invoice.
     */
    public ?Invoice $invoice;

    /**
     * @var SuccessfulPayment|null $successful_payment
     * Message is a service message about a successful payment, information about the payment.
     */
    public ?SuccessfulPayment $successful_payment;

    /**
     * @var string|null
     * The domain name of the website on which the user has logged in
     */
    public ?string $connected_website;

    /**
     * @var PassportData|null
     * Telegram Passport data
     */
    public ?PassportData $passport_data;

    /**
     * @var ProximityAlertTriggered|null $proximity_alert_triggered
     * Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     */
    public ?ProximityAlertTriggered $proximity_alert_triggered;

    /**
     * @var VoiceChatScheduled|null $voice_chat_scheduled
     * Optional. Service message: voice chat scheduled
     */
    public ?VoiceChatScheduled $voice_chat_scheduled;

    /**
     * @var VoiceChatStarted|null $voice_chat_started
     * Optional. Service message: voice chat started
     */
    public ?VoiceChatStarted $voice_chat_started;

    /**
     * @var VoiceChatEnded|null $voice_chat_ended
     * Optional. Service message: voice chat ended
     */
    public ?VoiceChatEnded $voice_chat_ended;

    /**
     * @var VoiceChatParticipantsInvited|null $voice_chat_participants_invited
     * Optional. Service message: new participants invited to a voice chat
     */
    public ?VoiceChatParticipantsInvited $voice_chat_participants_invited;

    /**
     * @var InlineKeyboardMarkup|null
     * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     */
    public ?InlineKeyboardMarkup $reply_markup;
}
