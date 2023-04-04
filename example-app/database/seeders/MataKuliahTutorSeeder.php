<?php

namespace Database\Seeders;

use App\Models\MataKuliahTutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahTutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataKuliahTutor::insert([
            [
                "mata_kuliah_id" => 1,
                "tutor_id" => 1
            ],
            [
                "mata_kuliah_id" => 2,
                "tutor_id" => 1
            ],
            [
                "mata_kuliah_id" => 3,
                "tutor_id" => 1
            ],
            [
                "mata_kuliah_id" => 4,
                "tutor_id" => 1
            ],
            [
                "mata_kuliah_id" => 5,
                "tutor_id" => 1
            ],
            // [
            //     "mata_kuliah_id" => 1,
            //     "tutor_id" => 3
            // ],
            // [
            //     "mata_kuliah_id" => 2,
            //     "tutor_id" => 3
            // ],
            // [
            //     "mata_kuliah_id" => 3,
            //     "tutor_id" => 3
            // ],


        ]);
    }
}
