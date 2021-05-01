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

//  Without Controller
// Route::get('/', function () {
//     $nama = [
//         "Achmad Rifki Raihansyah Bagja",
//         "Rava Akhtareez Ariadna",
//         "Muhammad Athan Hanafi"
//     ];

//     return view('index', ['namalengkap' => $nama]);
// });

// With Controller
Route::get('/home', 'CustomersController@helloWorld');

Route::get('/customer', 'CustomersController@list');
Route::post('/customer', 'CustomersController@store');
// Route::get('/about', 'CustomersController@contact');