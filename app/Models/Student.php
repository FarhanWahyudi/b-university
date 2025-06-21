<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'email',
        'nomor_telepon',
        'jalur',
        'image',
        'program_study1',
        'program_study2',
    ];
}
