<?php

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [FrontController::class, 'welcome'])->name('home');

//rotta sicura crea nuovo annnuncio
Route::middleware(['auth'])->group(function(){
    Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create');
});

//rotta view singolo annuncio
Route::get('/singolo/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');
//chi siamo
Route::get('/chisiamo', [PublicController::class, 'chiSiamo'])->name('chisiamo');
// rotta ricerca per categoria
Route::get('/ricerca/{category}', function(Category $category) {
    $announcements = Announcement::all();
    return view('categorySearch', compact('category'), compact('announcements'));
})->name('category.search');
