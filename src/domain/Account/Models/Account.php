<?php

namespace Domain\Account\Models;

use Domain\Account\Enums\AccountStatus;
use Domain\Task\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Account extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'role_id',
        'fullname',
        'organization',
        'location',
        'avatar',
        'status',
    ];

    protected $casts = [
        'status' => AccountStatus::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
