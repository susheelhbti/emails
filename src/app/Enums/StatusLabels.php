<?php

namespace LaravelEnso\Emails\app\Enums;

use LaravelEnso\Helpers\app\Classes\Enum;

class StatusLabels extends Enum
{
    protected static $data = [
        Statuses::Sent => 'is-success',
        Statuses::Scheduled => 'is-warning',
        Statuses::Draft => 'is-info',
    ];
}