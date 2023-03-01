<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/home', function () {
    return view('main.home');
});
Route::get('/dbconn', function () {
    try{
        DB::connection()->getPdo();
        return "connection succes";
    }
    catch(\Exception $ex)
    {
        dd($ex->getMessage());
    }

    // return view('navBar.navbar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
