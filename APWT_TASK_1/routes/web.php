<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;


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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/ourteam', [PageController::class, 'ourteam'])->name('ourteam');
Route::get('/contactus', [PageController::class, 'contactus'])->name('contactus');
