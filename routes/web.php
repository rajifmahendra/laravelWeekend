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

// Route::get('/', function(){
//     return view('welcome');
// });

Route::get('/karyawans', 'KaryawanController@index')->name('karyawans.index');
Route::get('/karyawans/create', 'KaryawanController@create')->name('karyawans.create');
Route::post('/karyawans', 'KaryawanController@store')->name('karyawans.store');
Route::get('/karyawans/{karyawan}', 'KaryawanController@show')->name('karyawans.show');
Route::get('/karyawans/{karyawan}/edit', 'KaryawanController@edit')->name('karyawans.edit');
Route::patch('/karyawans/{karyawan}', 'KaryawanController@update')->name('karyawans.update');
Route::delete('/karyawans/{karyawan}', 'KaryawanController@destroy')->name('karyawans.destroy');



// Route::get('/file-upload', 'FileUploadController@fileUpload');
// ROute::post('/file-upload', 'FileUploadController@prosesFileUpload');

// symlink
// Route::get('file-upload-rename', 'FileUploadController@fileUploadRename');
// Route::post('file-upload-rename', 'FileUploadController@prosesFileUploadRename');


// Route::resource('gallery', 'GalleryController');

// Route::get('/daftar-karyawan', 'DataController@daftarKaryawan');
// Route::get('/tabel-karyawan', 'DataController@tabelKaryawan');
// Route::get('/blog-karyawan', 'DataController@blogKaryawan');

// Route::get('/', 'SessionController@index');
// Route::get('/buat-session', 'SessionController@buatSession');
// Route::get('/akses-session', 'SessionController@aksesSession');
// Route::get('/hapus-session', 'SessionController@hapusSession');
// Route::get('/flash-session', 'SessionController@flashSession');


// Route::get('/login', 'LoginController@login');
// Route::post('/login', 'LoginController@prosesLogin');
// Route::get('/logout', 'LoginController@logout');
// Route::redirect('/', '/login');
// Route::get('/daftar-karyawan','LoginController@daftarkaryawan')->middleware('login');
// Route::get('/table-karyawan','LoginController@tablekaryawan')->middleware('login');
// Route::get('/blog-karyawan','LoginController@blogkaryawan')->middleware('login');

// Route::get('/daftar-karyawan','DataController@daftarkaryawan')->middleware('auth');
// Route::get('/tabel-karyawan','DataController@tabelkaryawan')->middleware('auth');
// Route::get('/blog-karyawan','DataController@blogkaryawan')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// bagian
Route::get('/', 'BagianController@index')->middleware('auth');
Route::resource('bagians','BagianController')->middleware('auth');
Route::get('bagians/{bagian}', 'BagianController@show')->name('bagians.show')->middleware('auth')->middleware('can:view,bagian');