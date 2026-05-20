<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Lang;
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

Route::get('/language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
})->name('change_language');

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

Route::get('/about/{entity?}', function ($entity = 'about') {
    $titles = Lang::get('messages.' . $entity . '.titles');

    return view('legal.' . $entity, [
        'entity' => $entity,
        'titles' => $titles,
    ]);
})->name('about');

// Route::view('/politique-de-confidentialite', 'legal.privacy')->name('privacy');
// Route::view('/conditions-dutilisation', 'legal.terms')->name('terms');
// Route::view('/faq', 'legal.faq')->name('faq');

require __DIR__ . '/auth.php';
