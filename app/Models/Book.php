<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'publication_date' => 'datetime',
    ];

    public function prospects(): BelongsToMany
    {
        return $this->belongsToMany(Prospect::class);
    }
}
