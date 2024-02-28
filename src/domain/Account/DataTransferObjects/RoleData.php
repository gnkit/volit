<?php

namespace Domain\Account\DataTransferObjects;

use Spatie\LaravelData\Data;

final class RoleData extends Data
{
    public function __construct(
        public readonly ?int    $id,
        public readonly string  $name,
        public readonly string  $email,
        public readonly ?string $password,
    )
    {
    }
}
