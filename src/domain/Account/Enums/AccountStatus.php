<?php

namespace Domain\Account\Enums;

enum AccountStatus: string
{
    case BAN = 'ban';
    case ACTIVE = 'active';
    case UNVERIFIED = 'unverified';
}
