<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
  // rotta home REVISORE
  public function index(){
    $announcement = Announcement::where('is_accepted', !null)->orderBy('updated_at','DESC')->first();
    $announcement_to_check =  Announcement::where('is_accepted', null)->first();
    return view('revisor.index', compact('announcement_to_check'), compact('announcement'));
  }
  // rotta ACCETTA annuncio
  public function acceptAnnouncement(Announcement $announcement){
    $announcement->setAccepted(true);
    return redirect()->back()->with('message', 'annuncio accetato');
  }
  // rotta RIFIUTA annuncio
  public function rejectAnnouncement(Announcement $announcement){
    $announcement->setAccepted(false);
    return redirect()->back()->with('message', 'annuncio non accetato');
  }


  public function getBack(Announcement $announcement){
    $announcement_revised = Announcement::where('is_accepted', !null)->orderBy('updated_at','DESC')->first();
    $announcement_revised->setAccepted(null);
    return redirect()->back()->with('message', 'ultima revisione annullata');
  }




  // rotta CHIEDI di diventare revisore
  public function becomeRevisor() {
    Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
    return redirect()->back()->with('message', 'Complimenti, hai chiesto di diventare revisore');
  }
  // rotta ACCETTA utente revisore (attivabile da mail)
  public function makeRevisor(User $user){
    Artisan::call('presto:makeUserRevisor', ["email" => $user->email]);
    return redirect('/')->with('message', 'Complimenti, l\'utente è diventato revisore');
  }
}
