<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;


class AddressController extends Controller
{
    public function index(){
        $users = User::all();
        return view('address.index', ['users' => $users]);

    }

    public function store(Request $request){
        $municipality = $request['municipality'];
        $street = $request['street'];
        $number = $request['number'];
        $user_id = $request['user'];

        //dd($user_id);

        Address::create([
            'municipality' => $municipality,
            'street' => $street,
            'number' => $number,
            'user_id' => $user_id
        ]);

        return redirect()->route('user.index');
    }
}
