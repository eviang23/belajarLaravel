<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       /* $listMahasiswa = [
            [
                "nama" => "Asri",
                "No_induk" => "12345",
                "nilai" => 100
            ],
    
            [
                "nama" => "Bibi",
                "No_induk" => "12385",
                "nilai" => 89
            ],
    
            [
                "nama" => "Cici",
                "No_induk" => "12045",
                "nilai" => 63
            ],
    
            [
                "nama" => "Didi",
                "No_induk" => "10345",
                "nilai" => 76
            ],
    
            [
                "nama" => "Esri",
                "No_induk" => "12545",
                "nilai" => 45
            ]
        ];  ( dipindahkan ke Mahasiswa.php)*/
    
        $username = "Evi";
        return view(
            'masuk', 
    
            [
                'title' => 'home',
                'datamahasiswa' => Mahasiswa ::all() ,
                'user' => $username
            
                ]);
    }

    public function masuk()
    {
        return view('latihanhome');
    }

    public function Marketing_Registrasi()
    {
        
            return view('f_marketing', ['title' => 'Marketing dan Registrasi']);
        
    }

    public function datanilai()
    { 

            return view('daftarmahasiswa', ['dtmhs'=> Mahasiswa::all()]);
    }
        
    public function detail(Request $request)
    { 

            return view ('f_detail', [
             'title' => 'Detail Mahasiswa',
             'id' => $request->id,
             'data' => Mahasiswa::find($request->id)   
            ]);
    }

    public function dtTutor(Request $request)
    { 
            return view ('f_detailtutor', [
             'title' => 'Detail Tutor',
             'id' => $request->id,
             'data' => DTutor::find($request->id)   
            ]);
    }
}
