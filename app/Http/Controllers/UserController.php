<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;

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

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $address = $user->address;

        $user->name = $request['name'];
        $user->surname = $request['surname'];
        $user->email = $request['email'];
        $user->save();
        
        $address->municipality = $request['municipality'];
        $address->save();

        return redirect()->route('user.index');
    }
}
