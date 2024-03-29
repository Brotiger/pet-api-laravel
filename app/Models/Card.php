<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Card extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'desk_list_id'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
