<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeachersProfile;
use Carbon\Carbon;
use App\Models\User;
use Auth;
use Session;

class AdminTeachersController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
    $teachers_info = TeachersProfile::all();
    return view('admin.teachers_info.index',compact('teachers_info'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
    $teachers = User::where('profile_verified_at','=', null)->where('role','teacher')->pluck('name','id');
    return view('admin.teachers_info.create',compact('teachers'));
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
      'dp_path' => 'required',
      'information' => 'required|min:15|max:850',
      'style' => 'required',
     ]);
    $input = $request->all();
    if($file = $request->file('dp_path')){
      $name = "/TeachersImages/" . time().$file->getClientOriginalName();
      $file->move('TeachersImages', $name);
      $input['dp_path'] = $name;
    }
    $time = Carbon::now();
    $input['style'] = implode(" ", $request->style);
    $input['name'] = User::find($request->teachers_id)->name;
    User::where('id',$request->teachers_id)->update(['profile_verified_at'=>$time]);
    TeachersProfile::create($input);
    Session::flash('message', 'Teachers Information Updated');
    return back()->withInput();

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
    $teacher_info = TeachersProfile::findOrFail($id);
    $input = $request->all();
    $request->validate([
      'information' => 'required|min:15|max:850',
      'style' => 'required',
     ]);
    $input['style'] = implode(" ", $request->style);
    if($file = $request->file('dp_path')){
      $finalname = "/TeachersImages/";
      $name =  time().$file->getClientOriginalName();
      $file->move('TeachersImages', $name);
      $input['dp_path'] = $finalname.$name;

      // Deleteing Existed Photo
      $file_path = public_path().$teacher_info->dp_path;
      unlink($file_path);
    }
    $teacher_info->update($input);
    Session::flash('message', 'Teachers Information Updated');
    return back()->withInput();
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
  }
}
