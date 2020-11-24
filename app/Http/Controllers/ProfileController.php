<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use Session;

class ProfileController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
    return view('auth.profile');
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //
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
    $user = Auth::user();
    return view('auth.profile',compact('user'));
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
    $user = Auth::user();
    $input = $request->all();
    $hashedPassword = Auth::user()->password;
    if ($request->current_password == '' && $request->new_password == '' && $request->new_confirm_password =='') {
        $input = $request->except('current_password','new_password','new_confirm_password');
        $user->update($input);
        Session::flash('message', 'Profile Information Saved');
        return back()->withInput();
    } else {
      // code...
      $request->validate([
        'current_password' => ['required', new MatchOldPassword],
        'new_password' => 'required|max:18|min:8',
        'new_confirm_password' => 'same:new_password',
      ]);
      User::find(Auth::user()->id)->update(['password'=> Hash::make($request->new_password)]);
      $user->update($input);
      Session::flash('message', 'Password Updated');
      return back()->withInput();
    }
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
    $user = Auth::user();
    $user->delete();
    Session::flash('message', 'Account Deleted');
    return redirect('/home');
  }
}
