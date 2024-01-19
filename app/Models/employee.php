<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class employee extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'employee';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'role_id',
        'department_id',
        'section_id',
        'room_id',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function room()
    {
        return $this->belongsTo(room::class, );
    }

    // public function department()
    // {
    //     return $this->belongsTo(department::class, 'department_id', 'id');
    // }

    // public function roles()
    // {
    //     return $this->belongsToMany(role::class, 'role', 'role_id', 'id');
    // }

    // public function building()
    // {
    //     return $this->belongsTo(building::class, 'building_id', 'id');
    // }

    // public function floor()
    // {
    //     return $this->belongsTo(floor::class, 'floor_id', 'id');
    // }

    // public function department()
    // {
    //     return $this->belongsTo(department::class, 'department_id');
    // }

    public function section()
    {
        return $this->belongsTo(section::class, 'section_id');
    }

    public function role()
    {
        return $this->belongsTo(role::class);

    }

    public function address() {
        return $this->hasOne(employee::class);
    }

}
