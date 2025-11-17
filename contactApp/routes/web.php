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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function() {
    return view('contacts.index');
})->name('contacts.index');

Route::get('/contacts/create', function() {
    return view('contacts.create');
})->name('contacts.create');

Route::get('/contacts/{id}', function($id) {
    $contact = App\Models\Contact::find($id);
    return view('contacts.show', compact('contact'));
})->name('contacts.show');