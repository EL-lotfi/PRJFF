<?php

use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ServeurController;
use App\Http\Controllers\admin\RequeteController;
use App\Http\Controllers\dev\DevController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified' , 'standard'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified' , 'admin'])->name('admin');

Route::get('/configserver', function () {
    return view('admin.configserver');
})->middleware(['auth', 'verified' , 'admin'])->name('configserver');

Route::get('/superadmin', function () {
    return view('superadmin.superadmin');
})->middleware(['auth', 'verified' , 'superadmin'])->name('superadmin');

Route::middleware('auth')->group(function () {  
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//*******************admin**********************//
///////////////////////requete///////////////////////////////////
Route::middleware(['admin', 'auth', 'verified'])->group(function () {
    Route::get('/admin/requete', [RequeteController::class, 'index'])->name('requete.index');
    Route::get('/admin/requete/create', [RequeteController::class, 'create'])->name('requete.create');
    Route::post('/admin/requete/store', [RequeteController::class, 'store'])->name('requete.store'); 
    Route::get('/admin/requete/{id}/edit', [RequeteController::class, 'edit'])->name('requete.edit');
    Route::put('/admin/requete/{id}/update', [RequeteController::class, 'update'])->name('requete.update');
    Route::delete('/admin/requete/{id}/destroy', [RequeteController::class, 'destroy'])->name('requete.destroy');
    
});

///////////////////////////////server////////////////////////////////////////////////////
Route::middleware(['admin', 'auth', 'verified'])->group(function () {
    Route::get('/admin/serveur', [ServeurController::class, 'index'])->name('serveur.index');
    Route::get('/admin/serveur/create', [ServeurController::class, 'create'])->name('serveur.create');
    Route::post('/admin/serveur/store', [ServeurController::class, 'store'])->name('serveur.store'); 
    Route::get('/admin/serveur/{id}/edit', [ServeurController::class, 'edit'])->name('serveur.edit');
    Route::put('/admin/serveur/{id}/update', [ServeurController::class, 'update'])->name('serveur.update');
    Route::delete('/admin/serveur/{id}/destroy', [ServeurController::class, 'destroy'])->name('serveur.destroy'); 
});
/////////////////////////////module///////////////////////////////
Route::middleware(['admin', 'auth', 'verified'])->group(function () {
    Route::get('/admin/module', [ModuleController::class, 'index'])->name('module.index');
    Route::get('/admin/module/create', [ModuleController::class, 'create'])->name('module.create');
    Route::post('/admin/module/store', [ModuleController::class, 'store'])->name('module.store'); 
    Route::get('/admin/module/{id}/edit', [ModuleController::class, 'edit'])->name('module.edit');
    Route::put('/admin/module/{id}/update', [ModuleController::class, 'update'])->name('module.update');
    Route::delete('/admin/module/{id}/destroy', [ModuleController::class, 'destroy'])->name('module.destroy');
});

//*******************dev**********************//
///////////////////requtes//////////////////////
Route::middleware(['standard', 'auth', 'verified'])->group(function () {
    Route::get('/dev/requete', [DevController::class, 'index'])->name('module.index');
    Route::get('/dev/requete/create', [DevController::class, 'create'])->name('requete.devInsert');
    Route::post('/dev/requete/store', [DevController::class, 'store'])->name('module.store'); 
    Route::get('/dev/requete/{id}/edit', [DevController::class, 'edit'])->name('module.edit');
    Route::put('/dev/requete/{id}/update', [DevController::class, 'update'])->name('module.update');
    Route::delete('/dev/requete/{id}/destroy', [DevController::class, 'destroy'])->name('module.destroy');
});


require __DIR__.'/auth.php';
