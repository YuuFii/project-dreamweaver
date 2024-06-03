<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HelpController;

Route::get('/', [DashboardController::class, 'indexGuest'])->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profil Saya',
    ]);
});

// Route::get('/help', function () {
//     return view('help', [
//         'title' => 'Bantuan'
//     ]);
// });

Route::resource('help', HelpController::class);

Route::get('/favorite', function () {
    return view('favorite', [
        'title' => 'Favorit'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'Tentang Kami'
    ]);
});

Route::get('/chat', function () {
    return view('chat', [
        'title' => 'Chat'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware('auth')->group(function() {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware('auth')->group(function() {
    Route::resource('forums', ForumController::class);
    Route::resource('forums.threads', ThreadController::class);
    Route::post('threads/{thread}/like', [ThreadController::class, 'like'])->name('threads.like');
    Route::resource('threads.posts', PostController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');
    Route::post('/favorites/{artikel}', [FavoriteController::class, 'store'])->name('favorites.store');
    Route::delete('/favorites/{id}', [FavoriteController::class, 'destroy'])->name('favorites.destroy');
});

Route::get('/eksplorasi', function () {
    return view('projectWebsite.eksplorasi', [
        'title' => 'eksplorasi'
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/sumber', function () {
        return view('projectWebsite.sumber', [
            'title' => 'sumber'
        ]);
    });
});

Route::get('/tentangKami', function () {
    return view('projectWebsite.tentang', [
        'title' => 'tentangKami'
    ]);
});

Route::middleware('auth')->group(function() {
    Route::get('/artikel', [ArtikelController::class, 'selengkapnya']);
    Route::get('/artikel-cari', [ArtikelController::class, 'cari'])->name('selengkapnya-cari');
    Route::get('/detail-artikel/{id}', [ArtikelController::class, 'showDetail'])->name('detail-artikel');
});
