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

//Route::get('/', function () {return view('welcome');});
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Landing Page
Route::get('/', 'LandingpageController@index');
Route::get('/beranda', 'LandingpageController@beranda');
Route::get('/kepaladaerah', 'LandingpageController@bupati');
Route::get('/lambang', 'LandingpageController@lambang');
Route::get('/sejarah', 'LandingpageController@sejarah');
Route::get('/visi-misi', 'LandingpageController@visi');
Route::get('/lapor', 'LandingpageController@lapor');
Route::get('/galeri', 'LandingpageController@galeri');
Route::get('/berita/{id}', 'LandingpageController@berita');
Route::get('/peta','LandingpageController@peta');

// Dashboard
Route::get('/dashboard', 'Admin\DashboardController@index');
Route::get('/user', 'Admin\DashboardController@manajemenuser');  
Route::resource('slider','Admin\SliderController');
Route::resource('manajemen-berita','Admin\BeritaController');
Route::resource('manajemen-galeri','Admin\GaleriController');

