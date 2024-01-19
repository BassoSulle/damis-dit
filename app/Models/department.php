<?php

namespace App\Models;

use App\Models\section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;

    protected $table = 'departments';

    protected $fillable = [
        'name',
        'department_code'
    ];

    // public function employees()
    // {
    //     return $this->hasMany(employee::class, 'section_id');
    // }

    public function sections()
    {
        return $this->hasMany(section::class, 'department_id');
    }

    public function addresses() {
        return $this->hasMany(address::class);
    }
    
    
}
