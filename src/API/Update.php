<?php

namespace Alish\Telegram\API;

class Update extends TelegramAPI
{

    /**
     * @var integer $update_id
     * The update‘s unique identifier. Update identifiers start from a certain positive number and increase sequentially.
     * This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order.
     */
    public int $update_id;

    /**
     * @var Message|null $message
     * Optional. New incoming message of any kind — text, photo, sticker, etc.
     */
    public ?Message $message;

    /**
     * @var Message|null $edited_message
     * Optional. New version of a message that is known to the bot and was edited
     */
    public ?Message $edited_message;

    /**
     * @var Message|null $channel_post
     * Optional. New incoming channel post of any kind — text, photo, sticker, etc.
     */
    public ?Message $channel_post;

    /**
     * @var Message|null $edited_channel_post
     * Optional. New version of a channel post that is known to the bot and was edited
     */
    public ?Message $edited_channel_post;

    /**
     * @var InlineQuery|null $inline_query
     * Optional. New incoming inline query
     */
    public ?InlineQuery $inline_query;

    /**
     * @var ChosenInlineResult|null $chosen_inline_result
     * Optional. The result of an inline query that was chosen by a user and sent to their chat partner.
     * Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     */
    public ?ChosenInlineResult $chosen_inline_result;

    /**
     * @var CallbackQuery|null $callback_query
     * Optional. New incoming callback query
     */
    public ?CallbackQuery $callback_query;

    /**
     * @var ShippingQuery|null $shipping_query
     * Optional. New incoming shipping query. Only for invoices with flexible price
     */
    public ?ShippingQuery $shipping_query;

    /**
     * @var PreCheckoutQuery|null $pre_checkout_query
     * Optional. New incoming pre-checkout query. Contains full information about checkout
     */
    public ?PreCheckoutQuery $pre_checkout_query;

    /**
     * @var Poll|null $poll
     * Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
     */
    public ?Poll $poll;

    /**
     * @var PollAnswer|null $poll_answer
     * Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     */
    public ?PollAnswer $poll_answer;

    /**
     * @var ChatMemberUpdated|null $my_chat_member
     * Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     */
    public ?ChatMemberUpdated $my_chat_member;

    /**
     * @var ChatMemberUpdated|null $chat_member
     * Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify “chat_member” in the list of allowed_updates to receive these updates.
     */
    public ?ChatMemberUpdated $chat_member;
}
