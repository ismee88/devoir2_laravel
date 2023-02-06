<?php

use App\Http\Controllers\ClasseController;
use Illuminate\Support\Facades\Route;

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
Route::get('Classe/classe', [ClasseController::class, 'index'])->name('Classe.index');
Route::get('Classe/add', [ClasseController::class, 'add'])->name('Classe.add');
Route::post('Classe/store', [ClasseController::class, 'store'])->name('Classe.store');
Route::get('Classe/detail', [ClasseController::class, 'showMoyenne'])->name('Classe.detail');
Route::get('Classe/premier', [ClasseController::class, 'showStudent'])->name('Classe.premier');
