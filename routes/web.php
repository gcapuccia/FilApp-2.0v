<?php

use App\Http\Controllers\ProfileController;
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


/***********
 * LANDING *
 ***********/

Route::get('/', function () {
    return view('landing');
});

//TODO agregar rutas para las secciones de la landing page
Route::get('/faq', function () {
    return view('faq');
});


/**************************
 * FORMULARIO DEL CLIENTE *
 **************************/
Route::get('/formcliente', function () {
    return view('formcliente');
});
//TODO falta agregar controlador post para agregar cliente en espera


//TODO agregaria un formulario solo de 4 botones de servicio para q no sea un cliente sino un numero (ej: T34)

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
