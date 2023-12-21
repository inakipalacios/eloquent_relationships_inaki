<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;

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

Route::resource('example', ExampleController::class);

//User
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');

//Address
Route::get('/address', [AddressController::class, 'index'])->name('address.index');
Route::post('/address', [AddressController::class, 'store'])->name('address.store');
Route::get('/address/{id}/edit', [AddressController::class, 'edit'])->name('address.edit');
Route::delete('/address/{id}', [AddressController::class, 'destroy'])->name('address.destroy');
Route::put('/address/{id}', [AddressController::class, 'update'])->name('address.update');

//Posts
