<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;

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

/* 
* ADMIN ROUTES
 */
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/',[AdminController::class,'index'])->name("admin.home");
    Route::get('/project',[ProjectController::class,'index'])->name("project.home");
    Route::get('/project/create',[ProjectController::class,'create'])->name("project.create");
    Route::get('/project/edit/{id}',[ProjectController::class,'edit'])->name("project.edit");
    Route::put('/project/edit/{id}',[ProjectController::class,'update'])->name("project.update");
    Route::post('/project/store',[ProjectController::class,'store'])->name("project.store");
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
