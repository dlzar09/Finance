<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable=[
         'name',
        'email',
        'password',
        'avatar',
        'timezone',
        'theme',

    ];

    protected $hidden=[
        'password',
        'remember_token',
    ];

    protected $casts=[
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function Metric(): HasMany
    {
        return $this->hasMany(Metric::class);
    }

    public function Notification(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

    public function RecentActivity(): HasMany
    {
        return $this->hasMany(RecentActivity::class);
    } 

    public function UserPreference(): HasOne
    {
        return $this->hasOne(UserPreference::class);
    }

}
