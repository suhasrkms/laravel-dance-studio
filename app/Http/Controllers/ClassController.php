<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class ClassController extends Controller
{
    //
    public function index()
    {
      $events=Events::all();
      return view('users.classes',compact('events'));
    }
}
