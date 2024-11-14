<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Models\Csv;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LogoutController;

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

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::get('/register',[HomeController::class,'register']);

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/add_user',[AdminController::class,'registerUser']);
Route::post('/save_csv',[AdminController::class,'saveCSV']);

Route::post('logout',[LogoutController::class,'logout']);