<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get ('/home', function () {
  return redirect ()-> route ('home.index');
});

Route::get (
  '/', 
  'HomeController@index'
  )->name('home.index');

Route::get (
  '/contact', 
  'HomeController@contact'
  )->name ('home.contact');

Route::get (
  '/articles/{article}',
  'HomeController@articleShow'
)->name ('home.articles.show');


// --- Admin ---
Route::name ('admin.')
  ->middleware (['auth', 'checkPrivilege'])
  ->namespace ('Admin')
  ->prefix ('adminz')
  ->group (

    function () {
      
      Route::get ('/', 'IndexController@index')-> name ('index');
      
      Route::resource ('/articles', 'ArticleController');

      Route::resource ('/users', 'UserController')->except('show');
      
    }
  );