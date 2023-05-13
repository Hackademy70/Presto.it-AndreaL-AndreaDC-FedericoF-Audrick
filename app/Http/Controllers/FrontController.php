<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function welcome()
  {
    $announcements = Announcement::take(6)->get()->sortByDesc('created_at');
    return view('welcome', compact('announcements'));
  }

  // rotta chi siamo
  public function chiSiamo()
  {
    return view('chisiamo');
  }

  //rotta ricerche categorie
  public function searchCategory(Category $category)
  {
    $announcements = Announcement::all();
    return view('categorySearch', compact('category'), compact('announcements'));
  }


}