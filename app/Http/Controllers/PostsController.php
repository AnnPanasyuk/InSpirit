<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function show(Post $post) { // $post = Post::find($id); - неявное привязывание модели
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {

        $this->validate(request(), [
           'title' => 'required|min:2',
           'alias' => 'required',
           'intro' => 'required',
           'body' => 'required'
        ]);

        Post::create([
           'title' => request('title'),
           'alias' => request('alias'),
           'intro' => request('intro'),
           'body' => request('body')
        ]);

        return redirect('/');
    }

    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post) {

        $this->validate(request(), [
            'title' => 'required|min:2',
            'alias' => 'required',
            'intro' => 'required',
            'body' => 'required'
        ]);

        $post->update(request(['title', 'alias', 'intro', 'body']));

//        Post::update([
//            'title' => request('title'),
//            'alias' => request('alias'),
//            'intro' => request('intro'),
//            'body' => request('body')
//        ]);

        return redirect('/');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect('/');
    }
}
