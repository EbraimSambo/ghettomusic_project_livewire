<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\Music\Categores\CategoresIndex;
use App\Livewire\Pages\Music\Categores\Category;
use App\Livewire\Pages\Music\MusicCreate;
use App\Livewire\Pages\Music\MusicIndex;
use App\Livewire\Pages\Music\Single;
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

Route::get('/', Home::class)->name('home');

Route::prefix('music')->name('music.')->group(function () {

    Route::get('/', MusicIndex::class)->name('music');

    Route::get('/create', MusicCreate::class)->name('create');

    Route::prefix('categores')->name('categores.')->group(function(){
        Route::get('/', CategoresIndex::class)->name('categores');
        Route::get('/category/{category}', Category::class)->name('category');
    });
    
    Route::get('/show/{slug}', Single::class)->name('single');

});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
