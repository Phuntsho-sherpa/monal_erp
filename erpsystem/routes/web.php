<?php

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
Route::get('fleet', function () {
    return view('fleet');

});
Route::get('sale', function () {
    return view('sale');

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

