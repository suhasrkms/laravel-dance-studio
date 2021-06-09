<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Models\UsersProfile;
use App\Models\User;


class UserProfileController extends Controller
{
    //
    public function index()
    {
      //
      $user = Auth::user()->name;
      return view('auth.userprofile',compact('user'));
    }

    //
    public function store(Request $request)
    {
      //
      $request->validate([
        'phone_no' => 'required|regex:/[0-9]{9}/|digits:10',
        'age' => 'required',
      ]);
      $input = $request->all();
      $id = Auth::user()->id;
      $input['user_id'] = $id;
      $input['final_batch'] = "NIL";
      $time =Carbon::now();
      User::find(Auth::user()->id)->update(['profile_verified_at'=> $time]);

      UsersProfile::create($input);
      return redirect('/home');


    }
}
