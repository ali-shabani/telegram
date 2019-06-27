<?php

namespace Alish\Telegram\API;

class WebhookInfo extends BaseTelegram
{

    /**
     * @var string $url
     * Webhook URL, may be empty if webhook is not set up
     */
    protected $url;

    /**
     * @var boolean $has_custom_certificate
     * True, if a custom certificate was provided for webhook certificate checks
     */
    protected $has_custom_certificate;

    /**
     * @var integer $pending_update_count
     * Number of updates awaiting delivery
     */
    protected $pending_update_count;

    /**
     * @var integer|null $last_error_date
     * Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     */
    protected $last_error_date;

    /**
     * @var string|null $last_error_message
     * Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     */
    protected $last_error_message;

    /**
     * @var integer|null $max_connections
     * Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     */
    protected $max_connections;

    /**
     * @var string[]|null $allowed_updates
     * Optional. A list of update types the bot is subscribed to. Defaults to all update types
     */
    protected $allowed_updates;
}
