<?php

namespace App\Models;

use App\Models\asset;
use App\Models\employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset_assignment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function asset(){
        return $this->belongsTo(asset::class);
    }

    public function employee(){
        return $this->belongsTo(employee::class);
    }

}
