<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;


use App\Http\Controllers\Frontend\StaffController;

use App\Http\Controllers\Frontend\NoticeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\LanguageController;
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

Route::get('/',[HomeController::class,'home'])->name('home.page');
Route::get('service/{id}',[HomeController::class,'show'])->name('home.show.page');
Route::get('lang/{lang}',[LanguageController::class, 'switchLang'])->name('lang.switch');
Route::middleware('auth')->group(function () {
    // Route::get('/account/password', [PasswordController::class, 'index'])->name('password.index');
    // Route::put('/account/password', [PasswordController::class, 'update'])->name('password.update');


    // Route::get('/account/notice/show/{id}',[DashboardController::class,'notice_show'])->name('notice.show');
    Route::get('/account/dashboard/download/{file}',[DashboardController::class,'file_download'])
    ->name('file.download');

    // Route::singleton('account/profile', ProfileController::class);

    Route::get('/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('singup/',[HomeController::class,'singup'])->name('singup.page');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/staff', [StaffController::class,'index'])->name('staff.index');
Route::resource('/notice', NoticeController::class);
Route::get('/about-us', [AboutController::class, 'about'])->name('about.index');
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'contactSend'])->name('contact.send');
require __DIR__.'/auth.php';


