<?php

use App\Http\Controllers\PageController;
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

// Grupo de rutas publicas
Route::controller(PageController::class)->group(function () {
    Route::get('/',                 'inicio');
    Route::get('blogs',            'blogs')->name('blogs');
    Route::get('blogs/{post:slug}',     'post')->name('post');
    Route::get('about',            'about')->name('about');
    Route::get('thanks',            'thanks')->name('thanks');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
