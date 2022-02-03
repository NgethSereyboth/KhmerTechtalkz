<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckPrivilege
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {

    switch (true) {

      case !Auth::check():
      case Auth::user()->role->label !== "admin" && Auth::user()->role->label !== "developer":
        return redirect ()->route ('home.index');

      default:
        return $next($request);
        
    }

  }
}
