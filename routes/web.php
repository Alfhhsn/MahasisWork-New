<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\LoginController;

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

Route::get('/login',[LoginController::class, 'show'])->name('show');
Route::post('/login',[LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/Becomeastudent',[studentController::class, 'show'])->name('show');
Route::post('student', [studentController::class, 'DataStudent'])->name('DataStudent');
Route::get('/student',[studentController::class, 'index'])->name('index');


Route::get('/profile', function () {
    return view('profilefreelance');
});

// Route::get('/student', function () {
//     return view('student');
// });

Route::get('/aboutus', function () {
    return view('us');
});

Route::get('/viewprofileg', function () {
    return view('giselle');
});

Route::get('/viewprofilegg', function () {
    return view('giselleg');
});

Route::get('/viewprofilel', function () {
    return view('lisag');
});

Route::get('/viewprofilell', function () {
    return view('lisa');
});

Route::get('/viewprofiler', function () {
    return view('roseg');
});

Route::get('/viewprofilerr', function () {
    return view('rose');
});

Route::get('/viewprofilej', function () {
    return view('jennieg');
});

Route::get('/viewprofilejj', function () {
    return view('jennie');
});

Route::get('/viewprofilei', function () {
    return view('jisoog');
});

Route::get('/viewprofileii', function () {
    return view('jisoo');
});

Route::get('/viewprofilen', function () {
    return view('ningningg');
});

Route::get('/viewprofilenn', function () {
    return view('ningning');
});