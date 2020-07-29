<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/profile', function() {
// 	return view('profile');
// });

Route::get('/',  'PagesController@homepage');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('anggota/cari', 'AnggotaController@cari');
Route::get('anggota', 'AnggotaController@index');
Route::get('anggota/create', 'AnggotaController@create');
Route::get('anggota/{anggota}', 'AnggotaController@show');
Route::post('anggota', 'AnggotaController@store');
Route::get('anggota/{anggota}/edit', 'AnggotaController@edit');
Route::patch('anggota/{anggota}', 'AnggotaController@update');
Route::delete('anggota/{anggota}', 'AnggotaController@destroy');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kelurahan', 'KelurahanController')->parameters([
    'kelurahan' => 'kelurahan'
]);
Route::resource('hobi', 'HobiController');


//pak
// Route::get('/', 'PagesController@homepage');
// Route::get('about', 'PagesController@about');
// // Auth::routes(['register' => false]);
// Auth::routes();
// Route::resource('user','UserController');

// // Route::get('anggota/cari', 'AnggotaController@cari');
// Route::resource('anggota', 'AnggotaController');
// Route::resource('kelurahan', 'KelurahanController')->parameters([
//     'kelurahan' => 'kelurahan'
// ]);
// Route::resource('hobi', 'HobiController');
// Route::resource('user', 'UserController');

//amn
// Route::get('/', 'PagesController@homepage');
// Route::get('about', 'PagesController@about');
// Auth::routes(['register' => true]);
// Route::resource('anggota', 'AnggotaController');
