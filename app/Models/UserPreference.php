<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    //
    protected $fillable=[
         'user_id',
        'default_chart_type',
        'refresh_interval',
        'visible_metrics',
        'dashboard_layout',
    ];

    protected $casts=[
         'visible_metrics' => 'array',
        'dashboard_layout' => 'array',
    ];

      public function User(): Belongsto
    {
        return $this->belongsTo(User::class);
    }
}
