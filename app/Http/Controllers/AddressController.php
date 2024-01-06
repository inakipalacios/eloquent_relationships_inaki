<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;


class AddressController extends Controller
{
    public function index(){
        //$users = User::all();
        $users = User::doesntHave('address')->get();
        $addresses = Address::all();
        return view('address.index', ['users' => $users, 'addresses'=> $addresses]);

    }

    public function store(Request $request){
        $request->validate([
            'municipality' => 'required|string|max:50',
            'street' => 'required|string|max:50',
            'number' => 'required|integer',
        ]);

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
        return redirect()->route('address.index')->with('success', 'Address created successfully');

    }


    public function edit($id){
        $address =  Address::findOrFail($id);
        return view('address.edit', ['address' => $address]);
    }

    public function update(Request $request, $id){
        $address = Address::findOrFail($id);

        $address->municipality = $request['municipality'];
        $address->street = $request['street'];
        $address->number = $request['number'];
        $address->save();
        
        return redirect()->route('user.index');
    }

    public function destroy($id){
        $address = Address::findOrFail($id);
        $address->delete();
        return redirect()->route('user.index');
    }
}
