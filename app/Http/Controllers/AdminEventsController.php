<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use Carbon\Carbon;
use Session;

class AdminEventsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
    $events = Events::all();
    return view('admin.events.index',compact('events'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
    return view('admin.events.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $request->validate([
      'event_name' => 'required|min:4|max:24',
      'event_info' => 'required|min:10|max:100',
      'date' => 'required|after:' . Carbon::yesterday('Asia/Kolkata')->toDateString(),
      'start_time' => 'required',
      'end_time' => 'required|after:' . Carbon::parse($request->get('start_time'))->addSeconds('600')->toTimeString(),
    ]);
    $input = $request->all();
    $day = $request->date . " " .$request->start_time;
    $dateAndTime = Carbon::parse($day);
    $input['date'] = $dateAndTime;
    Events::create($input);
    return redirect('/admin/events');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
    $input = $request->all();
    $request->validate([
      'event_name' => 'required|min:4|max:24',
      'event_info' => 'required|min:10|max:100',
      'date' => 'required|after:' . Carbon::yesterday('Asia/Kolkata')->toDateString(),
      'start_time' => 'required',
      'end_time' => 'required|after:' . Carbon::parse($request->get('start_time'))->addSeconds('600')->toTimeString(),
    ]);
    $day = $request->date . " " .$request->start_time;
    $dateAndTime = Carbon::parse($day);
    $input['date'] = $dateAndTime;
    $event = Events::findOrFail($id);
    $event->update($input);
    Session::flash('message', 'Event Updated');
    return back()->withInput();
    // return $now;
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
    $event = Events::findOrFail($id);
    $event->delete();
    Session::flash('delete','The Event has been deleted');
    return back()->withInput();
   }
}
