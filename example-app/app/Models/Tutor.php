<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'nama_tutor',
    //     'id_tutor',
    //     'gender',
    //     'usia',
    //     'email',
    //     'bidang_keahlian',
    //     'periode_mengajar'
    // ];

    protected $guarded =['id'];

public function mataKuliah()
{
    return $this->belongsTo(MataKuliah::class); 
}

}

// MataKuliah : nama model MataKuliah.php