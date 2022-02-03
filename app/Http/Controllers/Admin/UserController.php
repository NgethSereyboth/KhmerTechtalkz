<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\UserRequest;

use App\Models\User;
use App\Models\Role;

use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;


class UserController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() : View{
    
    $users = User::with('role')
        ->orderBy('created_at', 'DESC')
        ->get ();

    return view ('admin.users.index', compact('users'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() : View {

    $roles = Role::orderBy('label')->get ();

    return view('admin.users.create', compact('roles'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(UserRequest $request)
  {

    $user = new User ($request->all());
    $user->password = Hash::make($request->get('password'));
    $user->save ();

    return redirect()->route('admin.users.index');
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(User $user) : View {

    $roles = Role::orderBy('label')->get ();

    return view('admin.users.edit', compact('user', 'roles'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(
    User $user,
    UserRequest $request
  )
  {

    $input = $request->all();
    $user->fill($input)->save();
    $user->password = Hash::make($request->get('password'));
    $user->save ();

    return redirect()->route('admin.users.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    $user->delete ();
    return redirect()->route('admin.users.index');
  }
  
}
