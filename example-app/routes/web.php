<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('Hello');
});
Route::get('/test', function () {
    return view('test');
});

Route::controller(HomeController::class)->group(
    function () {
        Route::get('/DP',  'data_pribadi');
        Route::get('/login', 'masuk');
        Route::get('/home',  'index');
        Route::get('/datamhs', 'datanilai');/*  hanya user admin , yg bisa akses nilai */
        Route::get('/detail/{id}',  'detail');

        Route::get('/dataTtr',  'datatutor')->middleware('auth');
        Route::get('/tutor/detail/{id}', 'detail_tutor');

        Route::get('/Marketing_Registrasi', 'Marketing_Registrasi');
        Route::get('/Pembelajaran_Ujian', 'Pembelajaran_Ujian');

        Route::get('/mahasiswa/tambah', 'indexAddMahasiswa');
        Route::post('/mahasiswa/tambah', 'StoreMahasiswa');

        Route::get('/mahasiswa/edit/{id}', 'IndexUpdateMahasiswa');
        Route::put('/mahasiswa/edit/{id}', 'StoreUpdateMahasiswa');

        Route::delete('/mahasiswa/delete/{id}', 'destroy');

        Route::get('/tutor/tambah', 'indexAddTutor');
        Route::post('/tutor/tambah', 'StoreTutor');

        Route::get('/tutor/edit/{id}', 'IndexUpdateTutor');
        Route::put('/tutor/edit/{id}', 'StoreUpdateTutor');

        Route::delete('/tutor/delete/{id}', 'destroyTutor');
    }
);

//route model binding
Route::get('/mata-kuliah/detail/{mataKuliah}', function (MataKuliah  $mataKuliah)
//  $mataKuliah->nama_matakul;
{
    return view('detail-matakuliah',
        [
            'title' => 'Detail Mata Kuliah',
            'data' => $mataKuliah
        ]
    );
});

/* dimasukkan ke grup 
Route::get('/login', [HomeController::class , 'masuk']); 
/*{
    return view('latihanhome');
});*/
/* dimasukkan ke grup
Route::get('/home', [HomeController::class , 'index']); */
/*{
   
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
    
});*/
/*dimasukkan ke grup
Route::get('/Marketing_Registrasi', [HomeController::class , 'Marketing_Registrasi']);
/*function () {
    return view('features', ['title' => 'Features']);
});*/

/*dimasukkan ke grup
Route::get('/Pembelajaran_Ujian', [HomeController::class , 'Pembelajaran_Ujian']); */
/* {
    return view('f_pembelajaran', ['title' => 'Pembelajaran dan Ujian']);
}); */

/* dimasukkan grup
Route::get('/datamhs', [HomeController::class , 'datanilai'] ); */
/* {
   /* $DataMhsw = [
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

    return view('daftarmahasiswa', ['dtmhs'=> $DataMhsw]);
}); */

/* dimasukkan ke grup
Route::get('/detail/{id}', [HomeController::class, 'detail']); */


/* dimasukkan di grup 
Route::get('/dataTtr', [HomeController::class , 'datatutor'] ); 

Route::get('/tutor/{id}', [HomeController::class, 'detail_tutor']); */

/* Route::get('/DP', [HomeController::class, 'data_pribadi']); */
/* function () {
    $username = "Evi";
    return view('datadiri', 
    [
        'user' => $username,
        'usia' => "20",
        'isMember' => true,
        'grade' => 90,
           
        ]); 
}); */

/* dimasukkan ke grup AuthController
Route::get('/auth/submit', [AuthController::class , 'IndexSubmit']);
Route::get('/auth/login', [AuthController::class , 'IndexLogin']);
Route::get('/auth/register', [AuthController::class , 'IndexRegister']);
*/

Route::controller(AuthController::class)->group(
    function () {
        Route::get('/auth/submit', 'IndexSubmit');
        Route::get('/auth/login', 'IndexLogin')->middleware('guest')->name('login'); /* middleware : jika sdh login, tdk bisa masuk ke menu lgin lg  */
        Route::get('/auth/register', 'IndexRegister');
        Route::post('/auth/register', 'storeRegister');
        Route::post('/auth/login', 'storeLogin');
        Route::post('/auth/logout', 'storeLogout');
    }
);


// Route::get('/auth/register', 'IndexRegister')->middleware('guest');