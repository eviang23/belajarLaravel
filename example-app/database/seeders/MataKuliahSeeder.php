<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataKuliah::insert([
           [ "kode" => "ASIP4432",
            "nama_matakul" => "Otomasi dalam Kearsipan"],

           [ "kode" => "SKOM4440",
            "nama_matakul" => "Produksi Media"],

           [ "kode" => "ISIP4112",
            "nama_matakul" => "Pengantar Ilmu Ekonomi"],

           [ "kode" => "PUST4418",
            "nama_matakul" => "Manajemen Penerbitan"],

           [ "kode" => "PUST4420",
            "nama_matakul" => "Penyusunan Artikel dan Publikasi Sekunder"],

        ]);
    }
}
