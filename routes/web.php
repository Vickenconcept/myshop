<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return redirect('/shop');
})->middleware(['auth', 'verified'])->name('index');

Route::get('/shop', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('shop');


// Route::get('/admin-dashboard', function () {
//     return view('admin.add-product');
// });

// admin routs
Route::group(['middleware' => 'admin.type'], function () {
    Route::resource('admin', AdminController::class)->middleware('auth');;
    Route::resource('product', ProductController::class)->middleware('auth');
    Route::get('/AddProduct', function () {
        return view('admin.add-product');
    })->name('AddProduct')->middleware('auth');;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');



require __DIR__.'/auth.php';
