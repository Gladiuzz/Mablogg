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

Route::get('/', 'PostController@getIndex')->middleware('guest')->name('hom');

Route::get('/read', 'PostController@getFullPost')->middleware('guest')->name('postingan');

Route::get('/belajar', function(){
    echo 'Hai semua saya sedang belajar laravel ';
});

Route::get('/halo', function(){
    $data ['nama'] = 'Hasin';
    $data ['jelkel'] = 'Laki Laki';
    return view('belajar', $data);
});

Route::get('/halo', function(){
    $nama = 'Hasin';
    $jelkel = 'Laki Laki';
    return view('belajar', compact('nama', 'jelkel'));
});

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/create', 'SiswaController@create');
Route::post('/siswa', 'SiswaController@store');
Route::get('/kelas', 'KelasController@index');
Route::get('/kelas/create', 'KelasController@create');
Route::post('/kelas', 'KelasController@store');
Route::get('/siswa/{id}/edit', 'SiswaController@edit');
Route::patch('/siswa/{id}', 'SiswaController@update');
Route::delete('/siswa/{id}', 'SiswaController@destroy');
Route::get('/kelas/{id}/edit', 'KelasController@edit');
Route::patch('/kelas/{id}', 'KelasController@update');
Route::delete('/kelas/{id}', 'KelasController@destroy');
Route::get('/guru', 'GuruController@index');
Route::get('/guru/create', 'GuruController@create');
Route::post('/guru', 'GuruController@store');
Route::get('/guru/{id}/edit', 'GuruController@edit');
Route::patch('/guru/{id}', 'GuruController@update');
Route::delete('/guru/{id}', 'GuruController@destroy');

Route::get('/home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost','User@loginPost');
Route::get('/register','User@register');
Route::post('/registerPost','User@registerPost');
Route::get('/logout','User@logout');

Route::get('/halaman-kedua', function () {
    return view('halamandua');
});

Route::get('/sebagai', 'SebagaiController@index');

Route::get('/Log in', 'loginController@create');

Route::get('/Log_in', 'loginController@create')->middleware('guest')->name('Log_in');
Route::get('/registrasi', 'RegisterController@create')->middleware('guest')->name('registrasi');
Route::post('/Log_in', 'loginController@postlogin')->middleware('guest');
Route::post('/registrasi', 'RegisterController@postregister')->middleware('guest');
Route::get('/read/{id}', 'PostController@getFullPost')->middleware('guest')->name('postingan');
// Route::get('/home', function() {
//     return view('home');
//     // return dd(auth()->user());
// })->middleware('auth')->name('home');
Route::get('/logout', 'loginController@logout')->middleware('auth')->name('logout');

Route::get('/t1', 'loginController@itulah')->middleware('auth')->name('t1');

Route::get('/profile', 'profileController@profile')->middleware('auth')->name('profile');
// Route::get('/profile/{id}', 'profileController@editPost')->middleware('auth')->name('profile.edit');
Route::post('/profile', 'profileController@update_avatar')->middleware('auth');
Route::get('/sidebar', 'loginController@testing')->middleware('auth')->name('testing');
Route::get('/create', 'loginController@ss')->middleware('auth')->name('ss');

Route::get('/author/post', 'HomeController@getPostForm')->middleware('auth')->name('post.form');
Route::post('/post_create', 'HomeController@createPost')->middleware('auth')->name('post.create');
// Route::get('/edit/{id}', 'HomeController@getPost')->name('post.detail');
Route::get('/edit/{id}', 'HomeController@editPost')->middleware('auth')->name('post.edit');
Route::post('/edit/{id}/updated', 'HomeController@updatePost')->middleware('auth')->name('post.update');
Route::delete('/author/post/delete/{id}', 'HomeController@deletePost')->middleware('auth')->name('post.delete');

Route::get('/search', 'HomeController@search')->middleware('guest')->name('search');
Route::get('/t1', 'HomeController@Index')->middleware('auth')->name('t1');

