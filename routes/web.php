<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\PostController;

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

Route::get('/', [UserController::class, 'index'])->name('user.index');


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

//Subject
Route::get('/subject', [SubjectController::class, 'index'])->name('subject.index');
Route::post('/subject', [SubjectController::class, 'store'])->name('subject.store');
Route::delete('/subject/{id}', [SubjectController::class, 'destroy'])->name('subject.destroy');
Route::get('/subject/{id}/edit', [SubjectController::class, 'edit'])->name('subject.edit');
Route::put('/subject/{id}', [SubjectController::class, 'update'])->name('subject.update');

//Post
Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');


//Final ends
Route::get('api/posts/recent', [PostController::class, 'recent_posts'])->name('post.recents');
Route::get('/api/posts/{id}', [UserController::class, 'user_posts'])->name('user.posts');







