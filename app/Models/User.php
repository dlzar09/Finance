<?php

namespace App\Models;
use App\Models\Metric;
use App\Models\RecentActivity;
use App\Models\UserPreference;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
       use HasFactory, Notifiable;
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
