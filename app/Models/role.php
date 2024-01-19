<?php

namespace App\Models;

use App\Models\employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function employees()
    // {
    //     return $this->hasMany(employee::class);
    // }
}
