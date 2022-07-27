<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Front\FrontMenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Front\FrontCategoryController;
use App\Http\Controllers\Front\FrontWelcomeController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/', [FrontWelcomeController::class, 'index']);
Route::get('/menu', [FrontMenuController::class, 'index'])->name('menu.index');
Route::get('/categories', [FrontCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [FrontCategoryController::class, 'index'])->name('categories.index');
Route::get('/reservation/step-one', [FrontReservationController::class, 'stepOne'])->name('reservation.step.one');
Route::get('/reservation/step-two', [FrontReservationController::class, 'stepTwo'])->name('reservation.step.two');

// Admin

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
});



require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
