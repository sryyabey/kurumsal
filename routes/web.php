<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\GalleryImageController;
use App\Http\Controllers\Admin\TeamController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('pages', PagesController::class)->names('pages');

    Route::resource('gallery', GalleryImageController::class)->names('gallery');

    Route::resource('team', TeamController::class)->names('admin.team');

    // contact form
    Route::get('contact-forms', [ContactFormController::class, 'index'])->name('contact-forms.index');
    Route::get('contact-forms/{contactForm}', [ContactFormController::class, 'show'])->name('contact-forms.show');
});

require __DIR__.'/auth.php';
