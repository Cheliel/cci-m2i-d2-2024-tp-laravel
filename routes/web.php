<?php

use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('homePage');


Route::get('/assosier', function () {
    echo (new \App\Http\Controllers\AssocierControlleurs)->index();
});
Route::get('/assosier-creer', function () {
    echo (new \App\Http\Controllers\AssocierControlleurs)->create();
});
Route::post('/assosier-creer-2', function () {
    echo (new \App\Http\Controllers\AssocierControlleurs)->store();
});
Route::get('/assosier-show', function () {
    echo (new \App\Http\Controllers\AssocierControlleurs)->show();
});
Route::get('/assosier-detruite', function () {
    echo (new \App\Http\Controllers\AssocierControlleurs)->delete();
});