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

    public function show()
    {
      $user = Auth::user();
      return view('auth.profile',compact('user'));
    }

    public function store(Request $request)
    {
      $input = $request->except('name','email',Auth::user()->id);
      $request->validate([
        'subject' => 'required|min:8|max:24',
        'message' => 'required|max:100|min:8',
      ]);
      Feedback::create($input);
      Session::flash('message', 'Feedback Sent');
      return back()->withInput();
    }
}
