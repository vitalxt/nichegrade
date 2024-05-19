<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'prospect_id' => 'integer',
        'page_count' => 'integer',
        'trim_size_1' => 'decimal:2',
        'trim_size_2' => 'decimal:2',
    ];
}
