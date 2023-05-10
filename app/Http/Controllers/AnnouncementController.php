<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function createAnnouncement (){
      $categories = Category::all();
      return view('announcement.create', compact('categories'));   
    }
}
