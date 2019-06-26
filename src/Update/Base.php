<?php

namespace Alish\Telegram\Update;

use Alish\Telegram\API\Update;

class Base
{
    /**
     * @var Update
     */
    protected $update;

    /**
     * Base constructor.
     *
     * @param Update $update
     */
    public function __construct(Update $update)
    {
        $this->update = $update;
    }
}
