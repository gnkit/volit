<?php

namespace Domain\Task\Models;

use Domain\Account\Models\Account;
use Domain\Task\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'category_help_id',
        'account_id',
        'start_date',
        'finish_date',
        'status',
    ];

    protected $casts = [
        'status' => TaskStatus::class,
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function categoryHelp(): BelongsTo
    {
        return $this->belongsTo(CategoryHelp::class);
    }

    public function bonuses(): BelongsToMany
    {
        return $this->belongsToMany(Bonus::class, 'bonuses_tasks');
    }

    public function follows(): HasMany
    {
        return $this->hasMany(Follow::class);
    }
}
