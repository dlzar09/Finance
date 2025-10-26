<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecentActivity extends Model
{
    //

    protected $fillable=[
        'user_id',
        'description',
        'icon',
        'color',
        'related_url',
    ];

      public function User(): Belongsto
    {
        return $this->belongsTo(User::class);
    }

}
