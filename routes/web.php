<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Http;
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

Route::get('/',[PageController::class, 'Homepage'])->name('Homepage');
Route::get('/Struttura',[PageController::class, 'Struttura'])->name('Struttura');
Route::get('/Dove_siamo',[PageController::class, 'Dove_siamo'])->name('Dove_siamo');
Route::get('/Corsi',[PageController::class, 'Corsi'])->name('Corsi');
Route::get('/Contatti',[PageController::class, 'Contatti'])->name('Contatti');
Route::get('/Corsi_detail',[PageController::class, 'Corsi_detail'])->name('Corsi_detail');
Route::get('/chiamatasemplice', function (){
    $response = Http::get("https://fakestoreapi.com/products") ->json();
    dd($response);
});
