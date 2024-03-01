<?php

namespace Domain\Task\DataTransferObjects;

use Spatie\LaravelData\Data;

final class BonusData extends Data
{
    public function __construct(
        public readonly ?int    $id,
        public readonly string  $name,
        public readonly ?string $slug,
        public readonly ?string $icon,
    )
    {
    }
}
