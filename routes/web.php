<?php

use App\Http\Controllers\AssocierControlleurs;
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

Route::post('/assosier-detruite/{id}', [AssocierControlleurs::class, 'destroy'])->name('destroyMember');



Route::get('/assosier',[AssocierControlleurs::class, 'index'])->name('listMembers');


Route::get('/assosier-creer', function () {
    echo (new \App\Http\Controllers\AssocierControlleurs)->create();
});


Route::post('/assosier-creer-2', function () {
    echo (new \App\Http\Controllers\AssocierControlleurs)->store();
});


Route::get('/assosier-show', function () {
    echo (new \App\Http\Controllers\AssocierControlleurs)->show();
});


