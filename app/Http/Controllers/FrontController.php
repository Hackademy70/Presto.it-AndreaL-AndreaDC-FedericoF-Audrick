<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function welcome()
  {
    $announcements = Announcement::where('is_accepted', true)->take(8)->get()->sortByDesc('created_at');
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



  //rotta ricerca TNTsearch
  public function search(Request $request) {

    $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);

    return view('announcement.index', compact('announcements'));
  }



  //rotta set language
  public function setLanguage($lang){
    session()->put('locale', $lang);
    return redirect()->back();
  }
}