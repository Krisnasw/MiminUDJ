<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

  Route::post('/login', [
    'uses' => 'AdminController@postSignIn',
    'as' => 'login'
  ]);

  Route::get('/login', function () {
  	return view('login');
  });

  Route::get('logout', [
  'uses' => 'AdminController@Logout',
    'as' => 'welcome'
  ]);

Route::group(['middleware' => ['web', 'auth']], function() {

  Route::get('/mimin', array(
      'uses' => 'AdminController@showNewUser',
      'as' => 'index'
    ));

  Route::get('/mimin/soal', array(
        'uses' => 'SoalController@index',
        'as' => 'soal.soal'
    ));

  Route::get('/mimin/addsoal', array(
    'uses' => 'SoalController@dropdownPaket',
    'as' => 'soal.tambah'
  ));

  Route::get('/mimin/user', array(
        'uses' => 'SiswaController@index',
        'as' => 'user.user'
    ));

  Route::get('/mimin/addpaket', array(
        'uses' => 'PaketController@dropDown',
        'as' => 'paket.tambah'
    ));

  Route::post('/mimin/addpaket', array(
    'uses' => 'PaketController@store',
    'as' => 'paket.tambah'
    ));

  Route::get('/mimin/paket', array(
    'uses' => 'PaketController@index',
    'as' => 'paket.paket'
    ));

  Route::get('/mimin/addmapel', function () {
    return view('mapel.store');
  });

  Route::post('/mimin/addmapel', array(
    'uses' => 'MapelController@store',
    'as' => 'mapel.store'
    ));

  Route::get('/mimin/mapel', array(
    'uses' => 'MapelController@index',
    'as' => 'mapel.index'
    ));

  Route::get('/mimin/nilai', array(
    'uses' => 'NilaiController@index',
    'as' => 'nilai.index'
    ));

  Route::get('/mimin/nilai/xi', array(
    'uses' => 'NilaiController@nilaiSebelas',
    'as' => 'nilai.sebelas'
    ));

  Route::get('/mimin/nilai/xii', array(
    'uses' => 'NilaiController@nilaiDuabelas',
    'as' => 'nilai.sebelas'
    ));

  Route::get('/mimin/export-xls', array(
    'uses' => 'NilaiController@exportExcel',
    ));

  Route::get('/mimin/export-xls/xi', array(
    'uses' => 'NilaiController@exportExcelXI'
  ));

  Route::get('/mimin/export-xls/xii', array(
    'uses' => 'NilaiController@exportExcelXII'
  ));

Route::resource('soal', 'SoalController');
Route::resource('user', 'SiswaController');
Route::resource('nilai', 'NilaiController');
Route::resource('paket', 'PaketController');
Route::resource('mapel', 'MapelController');

});
