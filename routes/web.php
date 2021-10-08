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

Auth::routes();

Route::get('/data-asesor', 'App\Http\Controllers\visitorController@asesor');
Route::get('/legalitas', 'App\Http\Controllers\visitorController@legalitas');
Route::get('/proses-permohonan', 'App\Http\Controllers\visitorController@prosesPermohonan');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'App\Http\Controllers\adminController@index');
    Route::get('/asesor', 'App\Http\Controllers\adminController@asesor');
    Route::get('/imgresizer', 'App\Http\Controllers\settingController@imgres');
    Route::post('/imgresizer/{id}', 'App\Http\Controllers\settingController@imgresRes');
    Route::get('/asesor/{id}/edit', 'App\Http\Controllers\adminController@editAsesor');
    Route::post('/asesor/{id}/edit', 'App\Http\Controllers\adminController@editDataAsesor');
    Route::get('/asesor/{id}/hapus', 'App\Http\Controllers\adminController@hapusAsesor');
    Route::get('/asesor/create', 'App\Http\Controllers\adminController@formAddAsesor');
    Route::post('/asesor/create', 'App\Http\Controllers\adminController@addAsesor');
    Route::post('tambahkategori', 'App\Http\Controllers\kategoriController@tambah');
    Route::get('kategori/{id}/hapus', 'App\Http\Controllers\kategoriController@hapus');
    Route::get('artikel', 'App\Http\Controllers\artikelController@index');
    Route::get('artikel/tambah', 'App\Http\Controllers\artikelController@tambah');
    Route::post('artikel/tambah', 'App\Http\Controllers\artikelController@tambahdatabase');
    Route::get('artikel/{id}/edit', 'App\Http\Controllers\artikelController@edit');
    Route::get('artikel/{id}/hapus', 'App\Http\Controllers\artikelController@destroy');
    Route::post('artikel/{id}/edit', 'App\Http\Controllers\artikelController@editdatabase');
    Route::get('recyclebin', 'App\Http\Controllers\artikelController@recyclebin');
    Route::get('recyclebin/{id}/restore', 'App\Http\Controllers\artikelController@restore');
    Route::get('recyclebin/{id}/hapus', 'App\Http\Controllers\artikelController@hapuspermanen');
    Route::get('kategori', 'App\Http\Controllers\kategoriController@index');
    Route::get('tambahkategori', function () {
        return view('admin.formkategori');
    });
    Route::get('users', 'App\Http\Controllers\userController@index');
    Route::get('users/create', 'App\Http\Controllers\userController@create');
    Route::post('users/create', 'App\Http\Controllers\userController@createUser');
    Route::get('users/{id}/hapus', 'App\Http\Controllers\userController@hapusUser');
    Route::get('users/{id}/edit', 'App\Http\Controllers\userController@editUser');
    Route::post('users/{id}/edit', 'App\Http\Controllers\userController@editUserdb');
    Route::get('/dashboard', 'App\Http\Controllers\dbController@index');
    Route::get('/pengaturan', 'App\Http\Controllers\settingController@index');
    Route::post('/pengaturan/carousel/{id}', 'App\Http\Controllers\settingController@carousel');
    Route::post('/pengaturan/judul/{id}', 'App\Http\Controllers\settingController@judul');
    Route::post('/pengaturan/visimisi/{id}', 'App\Http\Controllers\settingController@visimisi');
    Route::post('/pengaturan/kebijakan/{id}', 'App\Http\Controllers\settingController@kebijakan');
    Route::post('/pengaturan/galeri1/{id}', 'App\Http\Controllers\settingController@galeri1');
    Route::post('/pengaturan/galeri2/{id}', 'App\Http\Controllers\settingController@galeri2');
    Route::post('/pengaturan/galeri3/{id}', 'App\Http\Controllers\settingController@galeri3');
    Route::post('/pengaturan/galeri4/{id}', 'App\Http\Controllers\settingController@galeri4');
    Route::post('/pengaturan/galeri5/{id}', 'App\Http\Controllers\settingController@galeri5');
    Route::post('/pengaturan/galeri6/{id}', 'App\Http\Controllers\settingController@galeri6');
    Route::post('/pengaturan/galeri7/{id}', 'App\Http\Controllers\settingController@galeri7');
    Route::post('/pengaturan/galeri8/{id}', 'App\Http\Controllers\settingController@galeri8');
    Route::post('/pengaturan/galeri9/{id}', 'App\Http\Controllers\settingController@galeri9');
    Route::post('/pengaturan/galeri10/{id}', 'App\Http\Controllers\settingController@galeri10');
    Route::post('/pengaturan/galeri11/{id}', 'App\Http\Controllers\settingController@galeri11');
    Route::post('/pengaturan/galeri12/{id}', 'App\Http\Controllers\settingController@galeri12');
    Route::post('/pengaturan/sasaran/{id}', 'App\Http\Controllers\settingController@sasaran');
});

Route::get('/', 'App\Http\Controllers\visitorController@index');
Route::get('/tentang', 'App\Http\Controllers\visitorController@tentang');
Route::get('/struktur', 'App\Http\Controllers\visitorController@struktur');
Route::get('/{slug}', 'App\Http\Controllers\visitorController@detailpost');


