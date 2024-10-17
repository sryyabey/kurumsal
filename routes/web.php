<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\GalleryImageController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\CompanyAddressController;
use App\Http\Controllers\Admin\OurServiceController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\CustomerReviewController;
use App\Http\Controllers\Web\WellcomeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\BackgroundImageController;
use App\Http\Controllers\Admin\LogoController;


Route::get('/',[WellcomeController::class,'index'])->name('welcome');
Route::post('/contact_me',[WellcomeController::class,'contact_form'])->name('contact_me');


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
    Route::resource('setting', SettingController::class)->names('admin.settings');

    Route::resource('company_address', CompanyAddressController::class)->names('admin.company_address');
    Route::resource('our_services', OurServiceController::class)->names('admin.our_services');
    Route::resource('socials', SocialController::class)->names('admin.socials');
    Route::resource('customer_reviews', CustomerReviewController::class)->names('admin.customer_reviews');
    Route::resource('sliders', SliderController::class)->names('admin.sliders');
    Route::resource('background-images', BackgroundImageController::class)->names('admin.background-images');
    Route::resource('logos', LogoController::class)->names('admin.logos');



    // contact form
    Route::get('contact-forms', [ContactFormController::class, 'index'])->name('contact-forms.index');
    Route::get('contact-forms/{contactForm}', [ContactFormController::class, 'show'])->name('contact-forms.show');
});

require __DIR__.'/auth.php';
