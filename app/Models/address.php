<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    protected  $guarded = [];


    public function section() {
        return $this->belongsTo(section::class, 'section_id');
    }

    public function employee() {
        return $this->hasOne(employee::class);
    }


}
