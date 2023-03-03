<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Models\User;
use App\Models\Category;
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
    return view('auth.login');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('registration');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('postRegistration', [AuthController::class, 'postRegistration'])->name('register.post'); 


Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('view', [AuthController::class, 'view'])->name('view');
Route::get('products', [AuthController::class, 'products'])->name('products');
Route::get('category', [AuthController::class, 'category'])->name('category');
Route::get('showcategory', [AuthController::class, 'showcategory'])->name('showcategory');
Route::get('instock', [AuthController::class, 'instock'])->name('instock');
Route::get('notifications', [AuthController::class, 'notifications'])->name('notifications');
Route::get('reports', [AuthController::class, 'reports'])->name('reports');


Route::post('addcategory', [AuthController::class, 'addcategory'])->name('addcategory');
Route::post('addproduct', [AuthController::class, 'addproduct'])->name('addproduct');

Route::get('sold', [AuthController::class, 'sold'])->name('sold');


Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/delete/{id}', [AuthController::class, 'deletefunction'])->name('delete');
Route::get('/deleteid/{id}', [AuthController::class, 'deleteproduct'])->name('delete');

Route::get('/addstock/{id}', [AuthController::class, 'addstock'])->name('addstock');
Route::get('/sold/{id}', [AuthController::class, 'sold'])->name('sold');


