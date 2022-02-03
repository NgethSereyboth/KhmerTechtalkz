<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index () : View {

    $articles = Article::orderBy('created_at', 'DESC')->get ();

    return view('home.index', compact('articles'));

  }

  public function articleShow (Article $article) : view {
    return view('home._index.news.show', compact('article'));
  }

  public function contact () : view {
    return view('home.contact');
  }
}
