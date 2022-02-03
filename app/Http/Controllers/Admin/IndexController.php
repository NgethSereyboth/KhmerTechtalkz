<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
  
  public function index () : view {
    return view ('admin.index');
  }

}
