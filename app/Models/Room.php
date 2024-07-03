<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'level_id', 'is_available'];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}