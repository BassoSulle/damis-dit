<?php

namespace App\Models;

use App\Models\asset_type;
use App\Models\condition;
use App\Models\employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function registeredBy()
    // {
    //     return $this->hasOne(employee::class, 'registered_by');
    // }

    public function asset_assignment()
    {
        return $this->hasMany(asset_assignment::class);
    }

    public function condition()
    {
        return $this->belongsTo(condition::class);
    }

    public function assettype()
    {
        return $this->belongsTo(asset_type::class, 'assettype_id');
    }

    public function employee()
    {
        return $this->belongsTo(employee::class, 'registered_by');
    }

    // public function


}
