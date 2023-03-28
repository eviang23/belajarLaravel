<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::insert([
            [
                'nama' => "Asri",
                'No_induk' => 12345,
                'nilai' => 100,
                'alamat' => "Kota Yogyakarta, DIY, Jawa Tengah",
                'gender' => 1,
                'usia' => 21
            ],
            [
                "nama" => "Bibi",
                "No_induk" => "12385",
                "nilai" => 89,
                "alamat" => "Gunungkidul, DIY , Jawa Tengah",
                "gender" => 2,
                "usia" => 19
            ],
            [
                "nama" => "Cici",
                "No_induk" => "12045",
                "nilai" => 63,
                "alamat" => "Bantul, DIY , Jawa Tengah",
                "gender" => 1,
                "usia" => 19
            ],
            [
                "nama" => "Didi",
                "No_induk" => "10345",
                "nilai" => 76,
                "alamat" => "Sleman, DIY , Jawa Tengah",
                "gender" => 2,
                "usia" => 20
            ],

            [
                "nama" => "Esri",
                "No_induk" => "12545",
                "nilai" => 45,
                "alamat" => "Mantrijeron, DIY , Jawa Tengah",
                "gender" => 1,
                "usia" => 18
            ]
        ]);
    }
}
