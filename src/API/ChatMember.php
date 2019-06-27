<?php

namespace Alish\Telegram\API;

class ChatMember extends BaseTelegram
{

    /**
     * @var User $user
     * Information about the user
     */
    protected $user;

    /**
     * @var string $status
     * The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
     */
    protected $status;

    /**
     * @var integer|null $until_date
     * Optional. Restictred and kicked only. Date when restrictions will be lifted for this user, unix time
     */
    protected $until_date;

    /**
     * @var boolean|null $can_be_edited
     * Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
     */
    protected $can_be_edited;

    /**
     * @var boolean|null $can_change_info
     * Optional. Administrators only. True, if the administrator can change the chat title, photo and other settings
     */
    protected $can_change_info;

    /**
     * @var boolean|null $can_post_messages
     * Optional. Administrators only. True, if the administrator can post in the channel, channels only
     */
    protected $can_post_messages;

    /**
     * @var boolean|null $can_edit_messages
     * Optional. Administrators only. True, if the administrator can edit messages of other users, channels only
     */
    protected $can_edit_messages;

    /**
     * @var boolean|null $can_delete_messages
     * Optional. Administrators only. True, if the administrator can delete messages of other users
     */
    protected $can_delete_messages;

    /**
     * @var boolean|null $can_invite_users
     * Optional. Administrators only. True, if the administrator can invite new users to the chat
     */
    protected $can_invite_users;

    /**
     * @var boolean|null $can_restrict_members
     * Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
     */
    protected $can_restrict_members;

    /**
     * @var boolean|null $can_pin_messages
     * Optional. Administrators only. True, if the administrator can pin messages, supergroups only
     */
    protected $can_pin_messages;

    /**
     * @var boolean|null $can_promote_members
     * Optional. Administrators only. True, if the administrator can add new administrators with a subset of his own privileges or demote administrators that he has promoted,
     * directly or indirectly (promoted by administrators that were appointed by the user)
     */
    protected $can_promote_members;

    /**
     * @var boolean|null $can_send_messages
     * Optional. Restricted only. True, if the user can send text messages, contacts, locations and venues
     */
    protected $can_send_messages;

    /**
     * @var boolean|null $can_send_media_messages
     * Optional. Restricted only. True, if the user can send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
     */
    protected $can_send_media_messages;

    /**
     * @var boolean|null $can_send_other_messages
     * Optional. Restricted only. True, if the user can send animations, games, stickers and use inline bots, implies can_send_media_messages
     */
    protected $can_send_other_messages;

    /**
     * @var boolean|null $can_add_web_page_previews
     * Optional. Restricted only. True, if user may add web page previews to his messages, implies can_send_media_messages
     */
    protected $can_add_web_page_previews;
}
