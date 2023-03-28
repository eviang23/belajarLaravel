<?php

namespace App\Models;


class Tutor
{
    private static $ListTutor = [
        [
            "id_tutor" => 45000001,
            "nama_tutor" => "Taufan",
            "personal" => [
                "gender" => 2,
                "usia" => 45,
                "email" => "taufan@gmail.com",
                "bidang_keahlian" => "PDGK4302",
                "periode_mengajar" => "2022",
            ]
        ],
        [
            "id_tutor" => 45000002,
            "nama_tutor" => "Bambang",
            "personal" => [
                "gender" => 2,
                "usia" => 48,
                "email" => "bambang@gmail.com",
                "bidang_keahlian" => "PAUD4500",
                "periode_mengajar" => "2023",
            ]
        ],
        [
            "id_tutor" => 45000003,
            "nama_tutor" => "Yayuk",
            "personal" => [
                "gender" => 1,
                "usia" => 53,
                "email" => "yayuk@gmail.com",
                "bidang_keahlian" => "PDGK4102",
                "periode_mengajar" => "2023",
            ]
        ],
        [
            "id_tutor" => 45000004,
            "nama_tutor" => "Endradi",
            "personal" => [
                "gender" => 2,
                "usia" => 55,
                "email" => "endradi@gmail.com",
                "bidang_keahlian" => "PDGK4200",
                "periode_mengajar" => "2022",
            ]
        ],
        [
            "id_tutor" => 45000005,
            "nama_tutor" => "Nurlaili",
            "personal" => [
                "gender" => 1,
                "usia" => 58,
                "email" => "nurlaili@gmail.com",
                "bidang_keahlian" => "PAUD4301",
                "periode_mengajar" => "2023",
            ]
        ],

    ];


    public static function all()
    {
        return collect(self::$ListTutor);
    }

    public static function find($id_tutor)
    {
        $dataTutor = self::all();
        return $dataTutor->firstWhere('id_tutor', $id_tutor);
    }
}
