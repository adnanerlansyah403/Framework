<?php

use App\Http\Controllers\SekolahController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
    $users = User::query()
        ->orderBy('tingkatan', 'desc')
        ->limit(5)
        ->offset(0)
        ->with('sekolah')
        ->paginate(10);
        
    return view('layouts.app', compact('users'));
})->name('index');

Route::prefix('/users')->group(function () {
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/show/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::get('/delete/sekolah/{id}', [SekolahController::class, 'destroy'])->name('sekolah.destroy');
Route::patch('/update/sekolah/{id}', [SekolahController::class, 'update'])->name('sekolah.update');
Route::resource('sekolah', SekolahController::class)->except('destroy', 'update');
