<?php

namespace App\Models;

use App\Models\address;
use App\Models\employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(department::class);
    }

    public function addresses()
    {
        return $this->hasMany(address::class, 'section_id');
    }

    public function employees(){
    return $this->hasMany(employee::class);
    }

}
