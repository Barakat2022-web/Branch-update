<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

 use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::post("Login",[LoginController::class,"Login"])->name('admin.login');
 


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('register-company',function(){
  return view('Register-company');
})->name('register.company');
Route::resource('home',HomeController::class);
Route::get("logout",[LogoutController::class,'flush'])->name('user.logout');
Route::get('sidebar',function(){
  return view('layouts.admin');
});

Route::get('language',function(){
   return get_languages();
});


 Route::prefix('employee')->group(function()
 {
  Route::get('Dashboard',[EmployeeController::class,'show'])->name('employee.dashboard');
});  