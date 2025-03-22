<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccidentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\WebreactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/verkeersongeval', [AccidentController::class, 'verkeersongeval'])->name('verkeersongeval');
Route::get('/bedrijfsongeval', [AccidentController::class, 'bedrijfsongeval'])->name('bedrijfsongeval');
Route::get('/ongeval-door-dieren', [AccidentController::class, 'ongevalDoorDieren'])->name('ongeval-door-dieren');
Route::get('/ongeval-door-wegdek', [AccidentController::class, 'ongevalDoorWegdek'])->name('ongeval-door-wegdek');

Route::get('/form', [FormController::class, 'show'])->name('form');
Route::post('/form', [FormController::class, 'submit'])->name('form.submit');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::post('/webreactie', [WebreactionController::class, 'store'])->name('webreactie.store');

Route::get('/algemene-voorwaarden', function () {
    return view('pages.algemene-voorwaarden');
})->name('algemene-voorwaarden');
