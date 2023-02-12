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

Route::match(['GET','POST'],'/',[\App\Http\Controllers\UserOperationsController::class,'getPeople'])->name('getPeople');
Route::get('/table', function () {
    return view('panel.table');
})->name("table");
Route::get('login',[\App\Http\Controllers\UserOperationsController::class,'loginPage'])->name('loginPage');
Route::post('checkPerson',[\App\Http\Controllers\UserOperationsController::class,'checkUser'])->name('checkTc');
Route::get('/newHome', function () {
    return view('newHomePage');
})->name("newHome");
Route::group(['prefix' => 'form'], function () {
    Route::get('/', [FormController::class, 'index'])->name('panel.form.index');
    Route::get('/list', [FormController::class, 'list'])->name('panel.form.list');
    Route::post('/create', [FormController::class, 'create'])->name('panel.form.create');
    Route::post('/get', [FormController::class, 'get'])->name('panel.form.get');
    Route::post('/delete', [FormController::class, 'delete'])->name('panel.form.delete');
    Route::post('/deleteImage', [FormController::class, 'deleteImage'])->name('panel.form.deleteImage');
    Route::post('/update', [FormController::class, 'update'])->name('panel.form.update');
    Route::get('/update_view/{id}', [FormController::class, 'update_view'])->name('panel.form.update_view');
    Route::get('/detail/{id}', [FormController::class, 'detail'])->name('panel.form.detail');
    Route::get('/fetch', [FormController::class, 'fetch'])->name('panel.form.fetch');
    Route::get('getTowns', [FormController::class, 'getTowns'])->name('get.towns');
});


