<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\Music\Categores;
use App\Livewire\Pages\Music\MusicCreate;
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

Route::get('/create', MusicCreate::class)->name('create');

Route::get('/categores/{category}', Categores::class)->name('categores');

Route::get('/show/{slug}', Single::class)->name('music.single');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
