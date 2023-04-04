<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Contracts\Service\Attribute\Required;

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
        //    if (!Gate::allows('isMahasiswa')) {     /* tambahan Gate */
        //         abort(403);
        //     }


        return view('daftarmahasiswa', ['dtmhs' => Mahasiswa::paginate(3)]);
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
        $tutors = Tutor::latest();

        if (request('search')) {

            $tutors->where('nama_tutor', 'like', '%' . request('search') . '%');
        }

        return view('daftartutor', [
            'title'=>'Tutor',
            'dt_tutor' => $tutors->get(),
        ]);
    }

    public function detail_tutor(Request $request)
    {
        return view('f_detailtutor', [
            'title' => 'Detail Tutor',
            'id' => $request->id,   // 'id_tutor' => $request->id,
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
                "alamat.required" => "Alamat Tidak Boleh Kosong !!",
                "gender.required" => "Gender Tidak boleh Kosong !!",
                "usia.required" => "Usia Tidak Boleh Kosong !!",

            ]


        );

        Mahasiswa::create($validatedData);
        return redirect('/datamhs')->with('success', 'Berhasil tambah data mahasiswa !');
    }

    public function indexUpdateMahasiswa(Request $request)
    {

        return view('form_edit_mahasiswa', [
            'title' => 'Edit Mahasiswa',
            'data' => Mahasiswa::find($request->id)

        ]);
    }

    public function StoreUpdateMahasiswa(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                "nama" => "min:3",
                "No_induk" => "min:6|integer",
                "nilai" => "integer|between:0,100",
                "alamat" => "min:3",
                "gender" => "",
                "usia" => "integer|between:0,100"
            ],

        );

        Mahasiswa::find($id)->update($validatedData);
        return redirect('/datamhs')->with('success', 'Berhasil edit data mahasiswa !');
    }

    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return redirect('/datamhs')->with('deleted', 'Berhasil Menghapus data mahasiswa !');
    }

    public function indexAddTutor()
    {
        return view('form_tutor', [
            'title' => 'Tambah Data Tutor',
            'matakuliah' => MataKuliah::all()
        
        ]);
    }


    //Create Tutor
    public function StoreTutor(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate(
            [
                "nama_tutor" => "required|min:3",
                "id_tutor" => "required|min:6|integer|unique:tutors",
                "gender" => "required",
                "usia" => "required|integer|between:0,100",
                "email" => "required|unique:tutors|lowercase|email:dns ",
                // "bidang_keahlian" => "required|min:3",
                // 'tahun_mengajar_awal' => "Required|integer|between:1999,2999" ,
                // 'tahun_mengajar_akhir' => "Required|integer|between:1999,2999" ,
                'matakuliah' => "required|max:4|min:1",
                "periode_mengajar" => "required",
                // "mata_kuliah_id" => "required|integer"
            // ],
            // [
            //     "nama_tutor.required" => "Nama Tidak Boleh Kosong !!",
            //     "id_tutor.unique" => "Id Tutor Tidak Boleh Kosong !!",
            //     "gender.required" => "Gender Tidak boleh Kosong !!",
            //     "usia.required" => "Usia Tidak Boleh Kosong !!",
            //     "email.unique" => "Email Tidak Boleh Kosong !!",
            //     "bidang_keahlian.required" => "Bidang Keahlian Tidak Boleh Kosong !!",
            //     "periode_mengajar.required" => "Periode Mengajar Tidak Boleh Kosong !!",
            //     // "mata_kuliah_id.required" => "Mata Kuliah Id Tidak Boleh Kosong !!"
            ]
        );

        $tutor = Tutor::create([
            
            'nama_tutor' => $validatedData['nama_tutor'],
            "id_tutor" => $validatedData['id_tutor'],
            "gender" => $validatedData['gender'],
            "usia" => $validatedData['usia'],
            'email' => $validatedData['email'], 
            
            'periode_mengajar' => $validatedData['periode_mengajar'],

            //Remove bidang_keahlian dan  mata_kuliah_id
            "bidang_keahlian" => "",
            "mata_kuliah_id" => 1,
        ]);

        //Save Multiple Matakuliah by tutor_id dalam table mata_kuliah_tutor
        $tutor->mataKuliahs() ->attach($validatedData['matakuliah']);
        return redirect('/dataTtr')->with('success', 'Berhasil Tambah Data Tutor !');
    }

    public function indexUpdateTutor(Request $request)
    {

        return view('form_edit_tutor', [
            'title' => 'Edit Tutor',
            'datator' => Tutor::find($request->id),
            'matakuliah' => MataKuliah::all()

        ]);
    }

    public function StoreUpdateTutor(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                "nama_tutor" => "min:3",
                "id_tutor" => "min:6|integer",
                "gender" => "required",
                "usia" => "min:6|integer",
                "email" => "required|unique:users,email|lowercase|email:dns ",
                "periode_mengajar" => "required",
                'matakuliah' => "required|max:4|min:1",
                // "bidang_keahlian" => "min:3",
                // "periode_mengajar" => "integer"
            ],

        );

        //find Tutor
        $tutor = Tutor::find($id);

        $tutor->mataKuliahs() ->sync($validatedData['matakuliah']);

        $tutor->update([
            'nama_tutor' => $validatedData['nama_tutor'],
            "id_tutor" => $validatedData['id_tutor'],
            "gender" => $validatedData['gender'],
            "usia" => $validatedData['usia'],
            'email' => $validatedData['email'], 
            'periode_mengajar' => $validatedData['periode_mengajar'],
            "bidang_keahlian" => "",
            "mata_kuliah_id" => 1,
        ]);
        return redirect('/dataTtr')->with('success', 'Berhasil edit data tutor !');
    }

    public function destroyTutor($id)
    {
        Tutor::destroy($id);
        return redirect('/dataTtr')->with('deleted', 'Berhasil Menghapus data tutor !');
    }
}
