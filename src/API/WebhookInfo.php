<?php

namespace Alish\Telegram\API;

class WebhookInfo extends BaseTelegram
{
    /**
     * @var string
     *             Webhook URL, may be empty if webhook is not set up
     */
    protected $url;

    /**
     * @var bool
     *           True, if a custom certificate was provided for webhook certificate checks
     */
    protected $has_custom_certificate;

    /**
     * @var int
     *          Number of updates awaiting delivery
     */
    protected $pending_update_count;

    /**
     * @var int|null
     *               Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     */
    protected $last_error_date;

    /**
     * @var string|null
     *                  Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     */
    protected $last_error_message;

    /**
     * @var int|null
     *               Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     */
    protected $max_connections;

    /**
     * @var string[]|null
     *                    Optional. A list of update types the bot is subscribed to. Defaults to all update types
     */
    protected $allowed_updates;
}
