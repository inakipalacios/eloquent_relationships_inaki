<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;
use App\Models\Post;

use Carbon\Carbon;

class UserController extends Controller
{
    //

    public function index(){
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function store(Request $request){

        //Validate
        $request->validate([
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'age' => 'nullable|integer|min:0',
            'date_of_birth' => 'nullable|date',
            'gender' => 'required|in:Male,Female,Other',
            'password' => 'required|string|min:6',
            'email' => 'required|email|unique:users|max:255',
        ]);

        $name = $request['name'];
        $surname = $request['surname'];
        $email = $request['email'];
        $password = $request['password'];
        $age = $request['age'];
        $date_of_birth = $request['date_of_birth'];
        $gender = $request['gender'];

        //Pasar a yyyy-mm-dd con carbon
        $new_date_of_birth = $date_of_birth ? Carbon::parse($date_of_birth)->format('Y-m-d') : null;

        User::create([
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'password' => $password,
            'age' => $age,
            'date_of_birth' => $new_date_of_birth,
            'gender' => $gender
        ]);
        return redirect()->route('user.index')->with('success', 'User created successfully');
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

        $user->name = $request['name'];
        $user->surname = $request['surname'];
        $user->email = $request['email'];
        $user->age = $request['age'];
        $user->gender = $request['gender'];

        $date_of_birth = $request['date_of_birth'];
        $new_date_of_birth = $date_of_birth ? Carbon::parse($date_of_birth)->format('Y-m-d') : null;

        $user->date_of_birth = $new_date_of_birth;
        
        $user->save();
        
        return redirect()->route('user.index');
    }

    public function user_posts($id){
        $user = User::findOrFail($id);
        $user_posts = $user->posts()->orderBy('title')->get();

        return view('users.posts', ['user'=>$user, 'user_posts' => $user_posts]);
    }
}
