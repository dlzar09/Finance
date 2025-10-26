<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChartData extends Model
{
    //
    protected $fillable=[
          'chart_type',
        'dataset_name',
        'labels',
        'datasets',
        'options',
    ];

    protected $casts=[
        'labels' => 'array',
        'datasets' => 'array',
        'options' => 'array',
    ];

    
}
