<?php

use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    $announcements = Announcement::all();
    return view('welcome', compact('announcements'));
})->name('home');


Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->name('announcement.create');
Route::get('/singolo/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');