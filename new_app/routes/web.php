<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HakimController;

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
    return view('welcome');
});
Route::get('/form',[HakimController::class, 'formPage']);
Route::get('/home', [App\Http\Controllers\HakimController::class, 'first']);
Route::post('/hom',[HakimController::class, 'store'])->name('register');