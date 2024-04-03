<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController as ControllersLevelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Models\UserModel;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
//Route::get('/user', [UserController::class, 'index']);

//Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
//Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
//Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');

//Route::get('/user', [UserController::class, 'index'])->name('/user');
//Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
//Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::post('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'edit'])->name('kategori.update');
Route::get('/kategori/delete/{id}',[KategoriController::class, 'delete'])->name('kategori.delete');

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store']);
Route::post('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'edit'])->name('user.update');
Route::get('/user/delete/{id}',[UserController::class, 'delete'])->name('user.delete');

Route::get('/level/level', [UserController::class, 'index']);
Route::get('/level/create', [UserController::class, 'create'])->name('level.create');
Route::post('/level', [UserController::class, 'store']);
Route::post('/level/edit/{id}', [UserController::class, 'edit'])->name('level.edit');
Route::get('/level/edit/{id}', [UserController::class, 'edit'])->name('level.edit');
Route::put('/level/{id}', [UserController::class, 'edit'])->name('level.update');
Route::get('/level/delete/{id}',[UserController::class, 'delete'])->name('level.delete');

