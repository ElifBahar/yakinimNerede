<?php

use App\Http\Controllers\FormController;
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
Route::get('/table', function () {
    return view('panel.table');
})->name("table");


Route::group(['prefix' => 'form'], function () {
    Route::get('/', [FormController::class, 'index'])->name('panel.form.index');
    Route::post('/create', [FormController::class, 'create'])->name('panel.form.create');
    Route::post('/get', [FormController::class, 'get'])->name('panel.form.get');
    Route::post('/delete', [FormController::class, 'delete'])->name('panel.form.delete');
    Route::post('/update', [FormController::class, 'update'])->name('panel.form.update');
    Route::get('/fetch', [FormController::class, 'fetch_form'])->name('panel.form.fetch');
    Route::get('/getDistrict', [FormController::class, 'getDistrict'])->name('getDistrict');
});


