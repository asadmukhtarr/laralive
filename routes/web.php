<?php

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

Route::get('/','App\Http\Livewire\Home')->name('home');
Route::get('/login','App\Http\Livewire\Login')->name('login');
Route::get('/register','App\Http\Livewire\Register')->name('register');
Route::middleware('auth')->group(function(){
    Route::get('/my-post','App\Http\Livewire\Mypost')->name('my.post');
});
Route::get('/logout',function(){
    Auth::logout();
    return redirect(route('home'));
})->name('logout');

