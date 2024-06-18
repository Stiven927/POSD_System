<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\CWE_controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PKB_controller;
use App\Http\Controllers\privacy_controller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::delete('/logout', [AuthManager::class, 'logout'])->name('logout');
    Route::get('/listpkb', [PKB_controller::class, 'list'])->name('listPKB');
    Route::get('/editPKB/{id}', [PKB_controller::class, 'edit'])->name('edPKB');
    Route::post('/editPKB/{id}', [PKB_controller::class, 'editpost'])->name('editpkbpost');
    Route::post('/deletePKB/{id}', [PKB_controller::class, 'deletepost'])->name('deletepkb');
    Route::get('/listadpkb', [PKB_controller::class, 'listAdmin'])->name('listPKB');
    Route::get('/listcwe', [CWE_controller::class, 'list'])->name('listCWE');
    Route::get('/listpry', [privacy_controller::class, 'list'])->name('listPRY');
    Route::get('/newpkb', function () {
        return view('newpkb');
    });
    Route::post('/newpkb', [PKB_controller::class, 'add'])->name('newpkb');
});