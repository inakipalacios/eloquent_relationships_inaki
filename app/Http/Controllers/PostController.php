<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Subject;
use App\Models\User;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $subjects = Subject::all();
        $users = User::all();
        return view('posts.index', ['posts' => $posts, 'subjects' => $subjects, 'users' => $users]);
    }

    public function store(Request $request){
        $title = $request['title'];
        $content = $request['content'];
        $user_id = $request['user'];

        $subjects = $request['subjects'];
        //dd($subjects);

        $post = Post::create([
            'title' => $title,
            'content' => $content,
            'user_id' => $user_id
        ]);

        $post->subjects()->sync($subjects);

        
        $user = User::findOrFail($user_id);
        //dd($user);


        return redirect()->route('post.index');

    }


    public function edit($id){
            $post =  Post::findOrFail($id);
            $subjects = Subject::all();
            return view('posts.edit', ['post' => $post, 'subjects'=>$subjects]);
    }

    public function update(Request $request, $id){
        $post = Post::findOrFail($id);
        $subjects = $request['subjects'];

        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->subjects()->sync($subjects);

        $post->save();
        
        return redirect()->route('post.index');
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('post.index');
    }

    public function recent_posts(){
        $posts = Post::orderBy('created_at', 'desc')->take(12)->get();
        return view('posts.recents', ['posts'=>$posts]);
    }
}
