<?php

namespace Alish\Telegram\Model;

use Illuminate\Database\Eloquent\Model;

class TelegramUpdate extends Model
{
    protected $fillable = [
        'update_id', 'result',
    ];
}
