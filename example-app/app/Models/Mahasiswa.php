<?php

namespace App\Models;



class Mahasiswa 
{
    private static $listMahasiswa = [
        [
            "id" => 1,
            "nama" => "Asri",
            "No_induk" => "12345",
            "nilai" => 100,
            "personal" =>[
                "alamat" => "Kota Yogyakarta, DIY , Jawa Tengah",
                "gender" => 1,
                "usia" => 21,
            ]
        ],

        [
            "id" => 2,
            "nama" => "Bibi",
            "No_induk" => "12385",
            "nilai" => 89,
            "personal" =>[
                "alamat" => "Gunungkidul, DIY , Jawa Tengah",
                "gender" => 2,
                "usia" => 19,
            ]
        ],

        [
            "id" => 3,
            "nama" => "Cici",
            "No_induk" => "12045",
            "nilai" => 63,
            "personal" =>[
                "alamat" => "Bantul, DIY , Jawa Tengah",
                "gender" => 1,
                "usia" => 19,
            ]
        ],

        [
            "id" => 4,
            "nama" => "Didi",
            "No_induk" => "10345",
            "nilai" => 76,
            "personal" =>[
                "alamat" => "Sleman, DIY , Jawa Tengah",
                "gender" => 2,
                "usia" => 20,
            ]
        ],

        [
            "id" => 5,
            "nama" => "Esri",
            "No_induk" => "12545",
            "nilai" => 45,
            "personal" =>[
                "alamat" => "Mantrijeron, DIY , Jawa Tengah",
                "gender" => 1,
                "usia" => 18,
            ]
        ]
    ];

    public static function all()
    { 
        return collect(self ::$listMahasiswa);
    }

    public static function find($id)
    { 
        $dataMahasiswa = self ::all();
        return $dataMahasiswa->firstWhere('id' , $id);
    }
}

/* 
membuat model Tutor
Id
Nama
Gender (sama dengan Mahasiswa)
Email
Bidang Keahlian
Periode Pengajar (2022 -2023)

*/