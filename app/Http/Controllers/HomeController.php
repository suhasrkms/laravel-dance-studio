<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Feedback;
use Auth;
use Session;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware(['auth','verified']);
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function index(Request $request)
  {
    $user = Auth::user();
    $events = Events::all();
    $count = 0;
    return view('home',compact('events','count','user'));
  }
}
