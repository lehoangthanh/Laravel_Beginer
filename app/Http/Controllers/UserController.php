<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('users.users')->with('users', $users);
    }

    public function create() {
        return view('users.create');
    }

    public function store(StoreRequest $request) {
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

    public function update(UpdateRequest $request, $id){
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
