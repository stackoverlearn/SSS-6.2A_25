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
    return '<h1>All Contacts</h1>';
});

Route::get('/contacts/create', function() {
    return '<h1>Add new contact</h1>';
});

Route::get('/contacts/{id}', function($id) {
    return App\Models\Contact::find($id);
});