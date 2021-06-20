<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Forms;
use App\Http\Livewire\Product;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Category;

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
Route::get('forms', Forms::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', Product::class);
Route::get('/kontak',Contact::class);
Route::get('/kategori', category::class);
