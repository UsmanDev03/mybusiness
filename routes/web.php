<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//simple web route
Route::view('/index' , 'index')->name('index');
Route::view('/about' , 'about')->name('about');
Route::view('/contact' , 'contact')->name('contact');
Route::view('/team' , 'team')->name('team');
Route::view('/services' , 'services')->name('services');
Route::view('/cases' , 'cases')->name('cases');
Route::view('/sectors' , 'sectors')->name('sectors');
Route::view('/samples' , 'samples')->name('samples');


require __DIR__.'/auth.php';
