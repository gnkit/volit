<?php

namespace Domain\Task\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Bonus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'icon',
    ];

    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'bonuses_tasks');
    }

}
