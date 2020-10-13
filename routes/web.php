<?php

use App\Http\Controllers\Admin\{
    DashboardController,
    PostController,
    MessageController,
    CabangOlahragaController,
    PlayerController,
    CoachController
};
use App\Http\Controllers\{
    HomeController,
    ArtikelController,
    ContactController,
    BeritaController,
    AboutController,
    PemainController
};
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

Route::get('/', [HomeController::class, 'index'])
                ->name('home');

Route::get('/artikel/{slug}', [ArtikelController::class, 'new'])
                ->name('artikel');

Route::get('/cabang-olahraga/{cabang_olahraga_id}/pemain', [PemainController::class, 'index'])
                ->name('cabor-pemain');

Route::get('/berita', [BeritaController::class, 'index'])
                ->name('berita');

Route::get('/berita/{slug}', [BeritaController::class, 'index'])
                ->name('berita.show');

Route::get('/about', [AboutController::class, 'index'])
				->name('about');

Route::get('/contact', [ContactController::class, 'index'])
                ->name('contact');

Route::post('/contact', [ContactController::class, 'create'])
        ->name('contact-create');

Route::prefix('admin')
        ->middleware(['auth:sanctum'])
        ->group(function(){
          Route::get('/', [DashboardController::class, 'index'])
                  ->name('dashboard');

          Route::resource('post', PostController::class);
          Route::resource('messages', MessageController::class);
          Route::resource('cabang-olahraga', CabangOlahragaController::class);
          Route::resource('players', PlayerController::class);
          Route::resource('coachs', CoachController::class);
        });


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
