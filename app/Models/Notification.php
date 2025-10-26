<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //

    protected $fillable=[
         'user_id',
        'title',
        'message',
        'type',
        'icon',
        'is_read',
        'action_url',
    ];

    protected $casts=[
    'is_read' => 'boolean',

    ];

    public function User(): Belongsto
    {
        return $this->belongsTo(User::class);
    }
}
