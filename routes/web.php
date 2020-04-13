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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", "LoginController@showLoginForm")
    ->name("login");
Route::post("/login", "LoginController@login")->name("login.login");

Route::get("/logout", "LoginController@logout")->name("logout");

// Route::get("/biodata-mahasiswa", "BiodataController@index")->name("biodata.index");

// Route::get("/biodata-mahasiswa/create", "BiodataController@create")->name("biodata.create");

// Route::get("/biodata-mahasiswa/show/{id}", "BiodataController@show")->name("biodata.show");

// Route::get("/biodata-mahasiswa/edit/{id}", "BiodataController@edit")->name("biodata.edit");

Route::resource("biodata", "BiodataController")->middleware("web");

Route::get("/biodata/{biodatum}/delete", "BiodataController@destroy")->name("biodata.destroy");