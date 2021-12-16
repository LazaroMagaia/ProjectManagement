<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FriendsController;
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
    Route::post('/project/success/{id}',[ProjectController::class,'success'])->name("project.success");
    Route::get('/project/create',[ProjectController::class,'create'])->name("project.create");
    Route::get('/project/edit/{id}',[ProjectController::class,'edit'])->name("project.edit");
    Route::get('/project/show/{id}',[ProjectController::class,'show'])->name("project.show");
    Route::put('/project/update/{id}',[ProjectController::class,'update'])->name("project.update");
    Route::delete('/project/delete/{id}',[ProjectController::class,'destroy'])->name("project.destroy");
    Route::post('/project/store',[ProjectController::class,'store'])->name("project.store");

    /**********************************FRIENDS***********************************/
    Route::get('/friends',[FriendsController::class,'index'])->name('friends.home');
    Route::get('/friends/news',[FriendsController::class,'news'])->name('friends.news');
    Route::post('/friends/add/{id}',[FriendsController::class,'store'])->name('friends.store');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
