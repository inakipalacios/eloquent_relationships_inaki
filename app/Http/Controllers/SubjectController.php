<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::all();

        return view('subjects.index', ['subjects' => $subjects]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:25',
        ]);

        $name = $request['name'];

        //dd($user_id);

        Subject::create([
            'name' => $name
        ]);

        return redirect()->route('subject.index');
    }

    public function destroy($id){
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return redirect()->route('subject.index');
    }

    public function edit($id){
        $subject = Subject::findOrFail($id);

        return view('subjects.edit', ['subject'=>$subject]);
    }

    public function update(Request $request, $id){
        $subject = Subject::findOrFail($id);
        $name = $request['name'];

        $subject->name = $name;
        $subject->save();

        return redirect()->route('subject.index');

    }


}
