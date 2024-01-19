<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset_type extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function assets()
    // {
    //     return $this->hasMany(asset::class, 'assettype_id');
    // }
}
