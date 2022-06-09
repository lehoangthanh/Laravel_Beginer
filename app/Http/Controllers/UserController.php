<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('users.users')->with('users', $users);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->save();
        return redirect(url('/users'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->password = $request->password;
        $user->name = $request->name;
        $user->save();
        return redirect(url('/users'));
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect(url('/users'));
    }
}
