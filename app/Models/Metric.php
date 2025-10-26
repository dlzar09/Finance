<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    //

    protected $fillable=[
         'user_id',
        'name',
        'value',
        'previous_value',
        'change_percentage',
        'change_direction',
        'icon',
        'color',
    ];

    protected $casts=[
         'value' => 'decimal:2',
        'previous_value' => 'decimal:2',
        'change_percentage' => 'decimal:2',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
