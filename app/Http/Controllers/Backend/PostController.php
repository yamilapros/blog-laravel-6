<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use App\Category;
use App\Tag;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'desc')->get();
        return view('Backend.post.index', ['posts' => $posts]);
    }

    public function create(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('Backend.post.create', compact('categories', 'tags'));
    }

    public function save(Request $request){
        
        $validate = $this->validate($request, [
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'slug' => 'required|string',
            'body' => 'required|string',
        ]);

        $post = new Post();

        $title = $request->input('title');
        $subtitle = $request->input('subtitle');
        $slug = $request->input('slug');
        $body = $request->input('body');
        $status = $request->input('status');

        $post->title = $title;
        $post->subtitle = $subtitle;
        $post->slug = $slug;
        $post->body = $body;
        $post->status = $status;

        $post->save();

        //For save is after of save
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect()->route('post.index')->with(['message' => 'The post has been created !']);
    }

    public function edit($id){
        $post = Post::with('tags', 'categories')->where('id', $id)->first();
        $categories = Category::all();
        $tags = Tag::all();
        return view('Backend.post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Request $request, $id){
        $validate = $this->validate($request, [
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'slug' => 'required|string',
            'body' => 'required|string',
        ]);

        $post = Post::find($id);

        $title = $request->input('title');
        $subtitle = $request->input('subtitle');
        $slug = $request->input('slug');
        $body = $request->input('body');
        $status = $request->input('status');

        $post->title = $title;
        $post->subtitle = $subtitle;
        $post->slug = $slug;
        $post->body = $body;
        $post->status = $status;
        
        //For update is before of save
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        

        $post->save();

        return redirect()->route('post.index')->with(['message' => 'The post has been updated !']);
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.index')->with(['message' => 'Your post has been deleted successfully!']);
    }
}
