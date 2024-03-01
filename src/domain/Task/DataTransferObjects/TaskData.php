<?php

namespace Domain\Task\DataTransferObjects;

use Domain\Account\Models\Account;
use Domain\Task\Enums\TaskStatus;
use Domain\Task\Models\Category;
use Domain\Task\Models\CategoryHelp;
use Spatie\LaravelData\Data;

final class TaskData extends Data
{
    public function __construct(
        public readonly ?int    $id,
        public readonly string  $title,
        public readonly string  $description,
        #[Exists(Category::class)]
        public readonly int     $category_id,
        #[Exists(CategoryHelp::class)]
        public readonly int     $category_help_id,
        #[Exists(Account::class)]
        public readonly int     $account_id,
        public readonly ?string $start_date,
        public readonly ?string $finish_date,
        #[Exists(TaskStatus::class)]
        public readonly string  $status,
    )
    {
    }
}
