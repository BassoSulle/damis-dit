<?php

namespace App\Models;

use App\Models\asset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class request extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function asset(){
        return $this->belongsTo(asset::class, 'asset_id');

    }

    public function receiver(){
        return $this->belongsTo(employee::class, 'receiver_id');

    }
}
