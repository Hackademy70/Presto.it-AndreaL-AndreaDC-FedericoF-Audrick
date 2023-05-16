<?php

use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

//GUEST
Route::controller(FrontController::class)->group( function () {
    // rotta WELCOME
    Route::get('/', 'welcome')->name('home');
    // rotta CHI SIAMO
    Route::get('/chisiamo', 'chiSiamo')->name('chisiamo');
    // rotta CERCA per CATEGORIA
    Route::get('/ricerca/{category}', 'searchCategory')->name('category.search');

    Route::get('/cerca', 'search')->name('search.announcements');

});
// FINE GUEST


//rotta sicura crea nuovo annnuncio
Route::middleware(['auth'])->group(function () {
    Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create');
});
//rotta view singolo annuncio
Route::get('/singolo/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');




// REVISORE
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


    //EXTRA
    Route::patch('/getback/{announcement}', 'getBack')->middleware('isRevisor')->name('revisor.getback');
    //fine EXTRA User 3
});
// FINE REVISORE





//LINGUE ROTTA PROVA
Route::post('/lingua/{lang}', [FrontController::class, 'setLanguage'])->name('setLocale');