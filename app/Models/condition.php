<?php

namespace App\Models;

use App\Models\asset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class condition extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function assets()
    // {
    //     return $this->hasMany(asset::class);
    // }
}
