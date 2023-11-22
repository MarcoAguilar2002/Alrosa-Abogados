<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
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

Route::view('/','index')->name('index');
Route::view('/nosotros','nosotros')->name('nosotros');
Route::view('/especialistas','especialistas')->name('especialistas');
Route::view('/areas','areas')->name('areas');

Route::get('/contactanos',[ClienteController::class,'contactanos'])->name('contactanos');
Route::post('/contactanos/registro',[ClienteController::class,'registro'])->name('registro');

Route::view('/derecho-laboral-privado','laboral')->name('laboral');
Route::view('/derecho-civil-y-comercial','civil')->name('civil');
Route::view('/derecho-administrativo','administrativo')->name('administrativo');
Route::view('/derecho-ambiental','ambiental')->name('ambiental');
Route::view('/derecho-constitucional','constitucional')->name('constitucional');

/*
Route::get()
Route::post()
Route::put()
Route::delete()
Route::patch()*/