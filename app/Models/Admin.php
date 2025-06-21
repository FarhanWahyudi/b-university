<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
     protected $fillable = [
        'nama',
        'nip',
        'jabatan',
        'image'
    ];

    protected $casts = [
        'image' => 'array'
    ];
}
