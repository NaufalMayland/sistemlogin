<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NavbarController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::middleware(['guest'])->group(function(){
    Route::get('/', [LoginController::class, "index"])->name('login');
    Route::post('/', [LoginController::class, "login"]);
});

Route::get('/redirects', function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, "admin"]);
    Route::get('/guru', [NavbarController::class, "navbar"])->name('dashboard');
    Route::get('/guru/tkompetensi', [AdminController::class, "guru"]);
    Route::get('/siswa', [AdminController::class, "siswa"]);
    Route::get('/logout ', [LoginController::class, "logout"]);
});

// Route::get('/guru', [NavbarController::class, 'navbar']);
// Route::get('/guru/tkompetensi', [NavbarController::class, 'navbar']);

