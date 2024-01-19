<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function section()
    {
        return $this->belongsTo(section::class);
    }

    public function floor()
    {
        return $this->belongsTo(floor::class);
    }

    public function building()
    {
        return $this->belongsTo(building::class);
    }

    public function employees()
    {
        return $this->hasMany(employee::class, 'room_id');
    }

}

