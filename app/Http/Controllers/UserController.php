<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function index(){
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function store(Request $request){
        $name = $request['name'];
        $surname = $request['surname'];
        $email = $request['email'];
        $password = $request['password'];

        User::create([
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'password' => $password,
        ]);
        return redirect()->route('user.index');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');

    }
}
