<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel', 'ArticleController@index'); // menampilkan tabel berisi data artikel-artikel
Route::get('/artikel/create', 'ArticleController@create'); // menampilkan form untuk membuat artikel baru
Route::post('/artikel', 'ArticleController@store'); // menyimpan artikel baru
Route::get('/artikel/{id}', 'ArticleController@show'); // menampilkan halaman detil untuk artikel dengan id tertentu 
Route::get('/artikel/{id}/edit', 'ArticleController@edit'); // menampilkan halaman form edit untuk artikel dengan id tertentu
Route::put('/artikel/{id}', 'ArticleController@update'); // menyimpan data dari form edit
Route::delete('/artikel/{id}', 'ArticleController@destroy'); // menghapus data dengan id tertentu
