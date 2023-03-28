<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'No_induk',
        'nilai',
        'alamat',
        'gender',
        'usia'
    ];

    protected $guarded =['id'];
} 
