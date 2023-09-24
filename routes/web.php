<?php

use App\Http\Controllers\LandingPageController;
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
    return view('/landingpage/home');
});
Route::get('/contact', function () {
    return view('/landingpage/contact');
});
Route::get('/product', function () {
    return view('/landingpage/programs');
});
Route::get('/shop', function () {
    return view('/landingpage/about');
});

Route::post('/landingpages/store', [LandingPageController::class, 'store'])->name('landingpages.store');
Route::post('/landingpages/teamstore', [LandingPageController::class, 'teamstore'])->name('teams.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/landingpages', [LandingPageController::class, 'index'])->name('landingpages.index');
    Route::get('/landingpages/create', [LandingPageController::class, 'create'])->name('landingpages.create');
    Route::get('/landingpages/teamcreate', [LandingPageController::class, 'teamcreate'])->name('teams.create');



});

require __DIR__.'/auth.php';