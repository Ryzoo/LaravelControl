<?php

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\Locale;

Route::middleware(Locale::class)->group(function() {
	Route::get('/', [DefaultController::class, 'getAboutPage'])->name('about');
	Route::get('/documentation', [DefaultController::class, 'getDocPage'])->name('doc');
	Route::get('/price', [DefaultController::class, 'getPricePage'])->name('price');
});

Route::post('/lang', [LanguageController::class, 'setLanguage'])->name('language');