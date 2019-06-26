<?php

namespace Alish\Telegram\Model;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return string
     */
    public function getTable()
    {
        return config('telegram.records.table');
    }
}
