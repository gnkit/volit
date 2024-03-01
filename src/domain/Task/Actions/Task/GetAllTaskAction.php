<?php

namespace Domain\Task\Actions\Task;

use Domain\Task\Models\Task;
use Illuminate\Database\Eloquent\Collection;

final class GetAllTaskAction
{
    public static function execute(): Collection
    {
        return Task::with('account', 'category', 'categoryHelp', 'bonuses')
            ->where('status', '=', 'published')
            ->select('id', 'title', 'description', 'category_id', 'category_help_id', 'start_date', 'finish_date', 'account_id')
            ->orderByDesc('created_at')
            ->limit(5)
            ->get();
    }
}
