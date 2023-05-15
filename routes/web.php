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
Route::controller(FrontController::class)->group( function () {
    // rotta WELCOME
    Route::get('/', 'welcome')->name('home');
    // rotta CHI SIAMO
    Route::get('/chisiamo', 'chiSiamo')->name('chisiamo');
    // rotta CERCA per CATEGORIA
    Route::get('/ricerca/{category}', 'searchCategory')->name('category.search');
});

// //rotta welcome
// Route::get('/', [FrontController::class, 'welcome'])->name('home');

// //chi siamo
// Route::get('/chisiamo', [FrontController::class, 'chiSiamo'])->name('chisiamo');

// // rotta ricerca per categoria
// Route::get('/ricerca/{category}', [FrontController::class, 'searchCategory'])->name('category.search');

//rotta sicura crea nuovo annnuncio
Route::middleware(['auth'])->group(function () {
    Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create');
});
//rotta view singolo annuncio
Route::get('/singolo/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');





Route::controller(RevisorController::class)->group( function() {
    // rotta CHIEDI di diventare REVISORE -> invia mail
    Route::get('/richiesta/revisore', 'becomeRevisor')->middleware('auth')->name('become.revisor');
    // rotta RENDI utente REVISORE -> dalla mail attivi questa rotta
    Route::get('/rendi/revisore/{user}', 'makeRevisor')->name('make.revisor');


    // HOME del REVISORE (pagina con annunci da revisare)
    Route::get('/revisore/home', 'index')->middleware('isRevisor')->name('revisor.index');
    // rotta ACCETTA annuncio
    Route::patch('/accetta/annuncio/{announcement}', 'acceptAnnouncement')->middleware('isRevisor')->name('revisor.accept_announcement');
    // rotta ACCETTA annuncio
    Route::patch('/rifiuta/annuncio/{announcement}', 'rejectAnnouncement')->middleware('isRevisor')->name('revisor.reject_announcement');
});

//EXTRA
Route::patch('/getback/{announcement}', [RevisorController::class, 'getBack'])->middleware('isRevisor')->name('revisor.getback');


// // rotta chiedi di diventare REVISORE
// Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

// //rendi utente revisore
// Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');





// //home revisore
// Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

// //accetta annuncio
// Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])
// ->middleware('isRevisor')->name('revisor.accept_announcement');

//rifiuta annuncio
// Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])
// ->middleware('isRevisor')->name('revisor.reject_announcement');