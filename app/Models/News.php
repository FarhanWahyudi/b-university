<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'users_id',
        'slug'
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
