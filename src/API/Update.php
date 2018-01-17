<?php

namespace Alish\Telegram\API;

class Update extends BaseTelegram {

    /**
     * @var integer $update_id
     * The update‘s unique identifier. Update identifiers start from a certain positive number and increase sequentially.
     * This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order.
     */
    protected $update_id;

    /**
     * @var Message|null $message
     * Optional. New incoming message of any kind — text, photo, sticker, etc.
     */
    protected $message;

    /**
     * @var Message|null $edited_message
     * Optional. New version of a message that is known to the bot and was edited
     */
    protected $edited_message;

    /**
     * @var Message|null $channel_post
     * Optional. New incoming channel post of any kind — text, photo, sticker, etc.
     */
    protected $channel_post;

    /**
     * @var Message $edited_channel_post
     * Optional. New version of a channel post that is known to the bot and was edited
     */
    protected $edited_channel_post;

    /**
     * @var InlineQuery|null $inline_query
     * Optional. New incoming inline query
     */
    protected $inline_query;

    /**
     * @var ChosenInlineResult|null $chosen_inline_result
     * Optional. The result of an inline query that was chosen by a user and sent to their chat partner.
     * Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     */
    protected $chosen_inline_result;

    /**
     * @var CallbackQuery|null $callback_query
     * Optional. New incoming callback query
     */
    protected $callback_query;

    /**
     * @var ShippingQuery|null $shipping_query
     * Optional. New incoming shipping query. Only for invoices with flexible price
     */
    protected $shipping_query;

    /**
     * @var PreCheckoutQuery|null $pre_checkout_query
     * Optional. New incoming pre-checkout query. Contains full information about checkout
     */
    protected $pre_checkout_query;
}