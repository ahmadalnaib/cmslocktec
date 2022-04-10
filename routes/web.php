<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\admin\ActionController as AdminActionController;
use App\Http\Controllers\admin\DashboardController;
use App\Models\Role;
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

Route::get('/', function () {
    return view('index');
});

Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/actions',ActionController::class)->except(['index']);

Route::get('/admin',[DashboardController::class,'index']);

Route::get('/admin/actions',[AdminActionController::class,'index'])->name('admin.action');
Route::put('/admin/{id}/actions',[AdminActionController::class,'edit'])->name('action.edit');
Route::post('/admin/',[AdminActionController::class,'update'])->name('action.update');
Route::post('/admin/actions',[AdminActionController::class,'destroy'])->name('action.destroy');