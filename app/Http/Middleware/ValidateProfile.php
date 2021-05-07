<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class ValidateProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      $profile = Auth::user()->profile_verified_at;
      $role = Auth::user()->role;
      if ($role == "teacher" || $role == "admin") {
        return $next($request);
      }
      else if ($profile == "") {
        return redirect('/user/profile');
      }
      return $next($request);

    }
}
