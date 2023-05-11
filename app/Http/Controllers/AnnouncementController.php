<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function createAnnouncement(){
      $categories = Category::all();
      return view('announcement.create', compact('categories'));   
    }

    public function showAnnouncement(Announcement $announcement){
      return view('singolo_annuncio', compact('announcement')); 
    }
}
