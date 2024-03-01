<?php

namespace Domain\Task\Models;

use Domain\Task\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function categoryHelp()
    {
        return $this->belongsTo(CategoryHelp::class);
    }

    public function bonuses()
    {
        return $this->belongsToMany(Bonus::class, 'bonuses_tasks');
    }
}
