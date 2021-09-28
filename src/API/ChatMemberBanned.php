<?php

namespace Alish\Telegram\API;

class ChatMemberBanned extends ChatMember
{
    /**
     * @var int $until_date
     * Date when restrictions will be lifted for this user; unix time. If 0, then the user is banned forever
     */
    public int $until_date;
}