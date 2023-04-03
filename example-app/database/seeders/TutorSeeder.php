<?php

namespace Database\Seeders;

use App\Models\Tutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tutor::insert([
            [
                "nama_tutor" => "Taufan",
                "id_tutor" => 45000001,
                "gender" => 2,
                "usia" => 45,
                "email" => "taufan@gmail.com",
                "bidang_keahlian" => "PDGK4302",
                "periode_mengajar" => "2022",
                "mata_kuliah_id" =>"1"
            ],
            [
                "nama_tutor" => "Bambang",
                "id_tutor" => 45000002,
                "gender" => 2,
                "usia" => 48,
                "email" => "bambang@gmail.com",
                "bidang_keahlian" => "PAUD4500",
                "periode_mengajar" => "2023",
                "mata_kuliah_id" =>"2"
            ],
            [
                "nama_tutor" => "Yayuk",
                "id_tutor" => 45000003,
                "gender" => 1,
                "usia" => 53,
                "email" => "yayuk@gmail.com",
                "bidang_keahlian" => "PDGK4102",
                "periode_mengajar" => "2023",
                "mata_kuliah_id" =>"3"
            ],
            [
                "nama_tutor" => "Endradi",
                "id_tutor" => 45000004,
                "gender" => 2,
                "usia" => 55,
                "email" => "endradi@gmail.com",
                "bidang_keahlian" => "PDGK4200",
                "periode_mengajar" => "2022",
                "mata_kuliah_id" =>"4"
            ],
            [
                "nama_tutor" => "Nurlaili",
                "id_tutor" => 45000005,
                "gender" => 1,
                "usia" => 58,
                "email" => "nurlaili@gmail.com",
                "bidang_keahlian" => "PAUD4301",
                "periode_mengajar" => "2023",
                "mata_kuliah_id" =>"5"
            ],
        ]);
    }
}
