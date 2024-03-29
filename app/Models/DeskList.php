<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskList extends Model
{
    protected $fillable = ['name', 'desk_id'];

    use HasFactory;

    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
