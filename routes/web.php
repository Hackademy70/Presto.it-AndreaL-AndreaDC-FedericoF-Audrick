<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;


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
//rotta welcome
Route::get('/', [FrontController::class, 'welcome'])->name('home');

//chi siamo
Route::get('/chisiamo', [FrontController::class, 'chiSiamo'])->name('chisiamo');

// rotta ricerca per categoria
Route::get('/ricerca/{category}', [FrontController::class, 'searchCategory'])->name('category.search');

//rotta sicura crea nuovo annnuncio
Route::middleware(['auth'])->group(function () {
    Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create');
    //rotta view singolo annuncio
    Route::get('/singolo/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');
});


//home revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');

//accetta annuncio
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_announcement');

//rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement');