<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Tutor;
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
                'datamahasiswa' => Mahasiswa::all(),
                'user' => $username
            ]
        );
    }

    public function data_pribadi()
    {
        $username = "Evi";
        return view(
            'datadiri',
            [
                'user' => $username,
                'usia' => "20",
                'isMember' => true,
                'grade' => 90,

            ]
        );
    }
    public function masuk()
    {
        return view('latihanhome');
    }

    public function Marketing_Registrasi()
    {
        return view('f_marketing', ['title' => 'Marketing dan Registrasi']);
    }

    public function Pembelajaran_Ujian()
    {
        return view('f_pembelajaran', ['title' => 'Pembelajaran dan Ujian']);
    }

    public function datanilai()
    {
        return view('daftarmahasiswa', ['dtmhs' => Mahasiswa::all()]);
    }

    public function detail(Request $request)
    {

        return view('f_detail', [
            'title' => 'Detail Mahasiswa',
            'id' => $request->id,
            'data' => Mahasiswa::find($request->id)
        ]);
    }

    public function datatutor()
    {
        return view('daftartutor', ['dt_tutor' => Tutor::all()]);
    }

    public function detail_tutor(Request $request)
    {
        return view('f_detailtutor', [
            'title' => 'Detail Tutor',
            'id_tutor' => $request->id,
            'datator' => Tutor::find($request->id)
        ]);
    }

    public function indexAddMahasiswa()
    {
        return view('form_mahasiswa', ['title' => 'Tambah Data Mahasiswa']);
    }

    public function StoreMahasiswa(Request $request)
    {
        $validatedData = $request->validate(
            [
                "nama" => "required|min:3",
                "No_induk" => "required|min:6|integer|unique:mahasiswas",
                "nilai" => "required|integer|between:0,100",
                "alamat" => "required|min:3",
                "gender" => "required",
                "usia" => "required"
            ],
            [
                "nama.required" => "Nama Tidak Boleh Kosong !!",
                "No_induk.required" => "No induk Tidak Boleh Kosong !!",
                "nilai.unique" => "nilai Sudah Ada !!",
                "alamat.required" => "alamat Tidak Boleh Kosong !!",
                "gender.required" => "gender Tidak boleh kosng !!",
                "usia.required" => "Usia Tidak Boleh Kosong !!",
               
            ]


        );

        Mahasiswa::create($validatedData);
        return redirect ('/datamhs')->with('success', 'Berhasil tambah data mahasiswa !');
    }

    public function indexUpdateMahasiswa(Request $request)
    {

        return view('form_edit_mahasiswa',[
            'title' => 'Edit Mahasisa',
            'data' => Mahasiswa::find($request->id)

        ]);
    }

    public function StoreUpdateMahasiswa(Request $request)
    {
         dd($request->all());  
        /*return view('form_edit_mahasiswa',[
            'title' => 'Edit Mahasisa',
            'data' => Mahasiswa::find($request->id)

        ]); */
    }
}
