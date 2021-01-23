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
Route::redirect('/user', '/users');
Route::redirect('/', '/home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');
Route::post('/home/testimonial', [App\Http\Controllers\HomeController::class, 'storeTestimonial'])->name('testimonial.store');

Route::post('/home', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');

Route::group(['prefix' => 'users', 'middleware' => ['auth'] ], function () {

// Dashboard controllers
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

// Submit complaint controllers
Route::get('/complaint/submit', [App\Http\Controllers\DashboardController::class, 'complaint_submit_view'])->name('complaint.submit');

Route::get('/complaint/view', [App\Http\Controllers\DashboardController::class, 'complaint_view'])->name('complaint.view');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
