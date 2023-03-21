<?php

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
Route::get('/login', function () {
    return view('latihanhome');
});
Route::get('/home', function () {
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
});



Route::get('/Features', function () {
    return view('features', ['title' => 'Features']);
});

Route::get('/DaftarHarga', function () {
    return view('pricing', ['title' => 'Pricing']);
});