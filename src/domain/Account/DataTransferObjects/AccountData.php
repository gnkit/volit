<?php

namespace Domain\Account\DataTransferObjects;

use Domain\Account\Enums\AccountStatus;
use Spatie\LaravelData\Data;

final class AccountData extends Data
{
    public function __construct(
        public readonly ?int          $id,
        public readonly ?int          $user_id,
        public readonly string        $fullname,
        public readonly ?string       $organization,
        public readonly ?string       $location,
        public readonly ?string       $avatar,
        public readonly AccountStatus $status,
        public readonly ?string       $activity_at,
    )
    {
    }
}
