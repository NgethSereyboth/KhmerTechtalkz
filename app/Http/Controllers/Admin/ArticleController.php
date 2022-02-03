<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticleRequest;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(): View {

    $articles = Article::orderBy('created_at', 'DESC')->get ();

    return view ('admin.articles.index', compact('articles')); 

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view ('admin.articles.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ArticleRequest $request)
  {

    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $filename = 'articles/' . $file->getClientOriginalName();
      Storage::disk('public')->put($filename, File::get($file));
    }

    $article = new Article($request->all());
    $article->image = $filename;
    $article->save ();

    return redirect ()->route('admin.articles.index');

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
  public function edit(Article $article)
  {
    return view('admin.articles.edit', compact('article'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(
    Article $article,
    ArticleRequest $request 
  )
  {

    if ($request->hasFile('image')) {

      $file = $request->file('image');
      $filename = 'articles/' . $file->getClientOriginalName();

      Storage::disk('public')->delete('articles/'.$article->image);

      Storage::disk('public')->put($filename, File::get($file));

      $article->image = $filename;
    
    }

    $article->title = $request->get('title');
    $article->content = $request->get('content');
    
    $article->save ();

    return redirect()->route('admin.articles.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Article $article)
  {

    Storage::disk('public')->delete('articles/'.$article->image);
    $article->delete ();

    return redirect()->route('admin.articles.index');

  }
}
