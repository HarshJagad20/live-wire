<?php

use App\Http\Livewire\ContactForm;
use App\Http\Livewire\Counter;
use App\Http\Livewire\Posts;
use App\Http\Livewire\ShowContacts;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('counter', Counter::class);

Route::get('post', Posts::class);

Route::get('contact-form', ContactForm::class);

Route::get('contacts', ShowContacts::class);
