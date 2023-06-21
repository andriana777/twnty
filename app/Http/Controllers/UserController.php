<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
class UserController extends Controller
{

public function index(){
    $users = User::all();
    return view('pages.users.users', compact('users'));
}

public function register(){
    $roles = Role::all();
    return view('pages.users.register', compact('roles'));
}

public function save(){
   User::prepareUserData();
   return redirect()->route('task.index')->with('success', 'User has been successfully registered!');
}

public function edit($id)
{   
    $roles = Role::all();
    $user = User::findOrFail($id);
    return view('pages.users.edit-user', compact('user', 'roles'));
}

public function update($id)
{
    $user = User::findOrFail($id);
    $data = request()->validate(([
        'name'   => 'required|string|min:3|max:50',
        'email' => 'required|email',
        'password'   => 'required|string',
        'role_id'   => 'required|integer'
 ]));
    $user->update($data);
    return redirect()->route('task.index')->with('success', "User's info has been updated successfully!");
}
public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->route('user.index')->with('success', 'The user has been deleted successfully!');
}

public function show($id)
{  
    $user = User::findOrFail($id);
    return view('pages.users.user-info', compact('user'));
}

}