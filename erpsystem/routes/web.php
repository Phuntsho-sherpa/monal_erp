<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');

});

Route::get('accounting', function () {
    return view('accounting');

});
Route::get('crm', function () {
    return view('crm');

});
Route::get('inventory', function () {
    return view('inventory');

});

Route::get('help', function () {
    return view('help');

});
Route::get('human', function () {
    return view('human');

});
Route::get('asset', function () {
    return view('asset');

});
Route::get('enterprise', function () {
    return view('enterprise');

});

Route::get('footer', function () {
    return view('footer');

});

Route::get('about', function () {
    return view('about');

});

Route::get('services', function () {
    return view('services');

});

Route::get('contact', function () {
    return view('contact');

});

Route::get('recrutment', function () {
    return view('recrutment');

});


Route::get('training', function () {
    return view('training');

});





Route::get('form', function () {
    return view('form');

});
Route::get('emphistory', function () {
    return view('emphistory');

});
Route::get('timeoff', function () {
    return view('timeoff');

});
Route::get('pormotion', function () {
    return view('pormotion');

});
Route::get('cservice', function () {
    return view('cservice');

});

Route::get('reporting', function () {
    return view('reporting');

});

Route::get('opportunity', function () {
    return view('opportunity');

});


Route::get('index', function() {
    return View::make('index');
});


Route::get('index2', function () {
    return view('index2');

});
Route::get('index3', function () {
    return view('index3');

});

Route::get('/contacts/success', function () {
    return view('contacts.success');
})->name('contacts.success');


Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

Route::resource('contacts', ContactController::class);
