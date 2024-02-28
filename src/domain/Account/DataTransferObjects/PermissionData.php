<?php

namespace Domain\Account\DataTransferObjects;

use Spatie\LaravelData\Data;

final class PermissionData extends Data
{
    public function __construct(
        public readonly ?int    $id,
        public readonly string  $name,
        public readonly ?string $slug,
    )
    {
    }
}
