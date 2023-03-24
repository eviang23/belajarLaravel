<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $listMahasiswa = [
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
        ];
    
        $username = "Evi";
        return view(
            'masuk', 
    
            [
                'user' => $username,
                'usia' => "20",
                'isMember' => true,
                'grade' => 90,
                'datamahasiswa' => $listMahasiswa ,
                'title' => 'home'
            
                ]
        );
    }

    public function masuk()
    {
        return view('latihanhome');
    }

    public function features()
    {
        
            return view('features', ['title' => 'Features']);
        
    }
}
