<?php

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



Route::redirect('/', '/home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');
Route::post('/home/testimonial', [App\Http\Controllers\HomeController::class, 'storeTestimonial'])->name('testimonial.store');

 
Auth::routes();
     
Route::group(['prefix' => 'admin', 'middleware' => ['auth'] ], function () {
// Dashboard controllers
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:manage-users'] ], function () {

// USERS CRUD
Route::get('/users', [App\Http\Controllers\UserController::class,  'index'])->name('users.view');
Route::get('/users/create', [App\Http\Controllers\UserController::class,'create'])->name('users.create');
Route::post('/users/create',  [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{user_id}',  [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::post('/users/edit/{user_id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::post('/users/change_password/{user_id}', [App\Http\Controllers\UserController::class,  'updatePassword'])->name('users.change_password');
Route::delete('/users/delete/{user_id}', [App\Http\Controllers\UserController::class,  'destroy'])->name('users.delete');

});

// AWAITING CRUD
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:awaiting'] ], function () {

Route::get('/awaiting', [App\Http\Controllers\AwaitingReviewController::class,  'index'])->name('awaiting');
Route::post('/awaiting/valid/{id}', [App\Http\Controllers\AwaitingReviewController::class, 'valid'])->name('awaiting.valid');
Route::post('/awaiting/invalid/{id}', [App\Http\Controllers\AwaitingReviewController::class, 'invalid'])->name('awaiting.invalid');
Route::post('/awaiting/flagged/{id}', [App\Http\Controllers\AwaitingReviewController::class, 'flagged'])->name('awaiting.flagged');
});

// ALL COMPLAINTS CRUD
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:view_all_complaints'] ], function () {

Route::get('/complaints', [App\Http\Controllers\AllComplaintsController::class, 'index'])->name('complaints');

});

// FLAGGED COMPLAINTS CRUD
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:manage-users'] ], function () {

Route::get('/flagged', [App\Http\Controllers\FlaggedComplaintsController::class, 'index'])->name('flagged');
Route::post('/flagged/restore/{id}', [App\Http\Controllers\FlaggedComplaintsController::class, 'restore'])->name('flagged.restore');
Route::post('/flagged/delete/{id}', [App\Http\Controllers\FlaggedComplaintsController::class, 'destroy'])->name('flagged.delete');

});

// PENDING COMPLAINTS CRUD
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:resolve'] ], function () {
Route::get('/pending', [App\Http\Controllers\PendingComplaintsController::class, 'index'])->name('pending');
Route::post('/pending/resolve/{id}', [App\Http\Controllers\PendingComplaintsController::class, 'resolve'])->name('pending.resolve');
Route::post('/pending/flagged/{id}', [App\Http\Controllers\PendingComplaintsController::class, 'flagged'])->name('pending.flagged');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:resolve'] ], function () {
// RESOLVED COMPLAINTS
Route::get('/resolved', [App\Http\Controllers\ResolvedComplaintsController::class, 'index'])->name('resolve');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:manage-users'] ], function () {
// TESTIMONIALS
Route::get('/testimonials', [App\Http\Controllers\TestimonialsController::class, 'index'])->name('testimonials');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth'] ], function () {
// Dashboard controllers
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'viewProfile'])->name('profile.index');
});





