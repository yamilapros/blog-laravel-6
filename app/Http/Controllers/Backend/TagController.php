<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::orderBy('id', 'desc')->get();
        return view('Backend.tag.index', compact('tags'));
    }

    public function create(){
        return view('Backend.tag.create');
    }

    public function save(Request $request){
        
        $validate = $this->validate($request, [
            'name' => 'required|string',
            'slug' => 'required|string'
        ]);

        $tag = new Tag();

        $name = $request->input('name');
        $slug = $request->input('slug');

        $tag->name = $name;
        $tag->slug = $slug;

        $tag->save();

        return redirect()->route('tag.index')->with(['message' => 'The tag has been created !']);
    }

    public function edit($id){
        $tag = Tag::find($id);
        return view('Backend.tag.edit', ['tag' => $tag]);
    }

    public function update(Request $request, $id){
        
        $validate = $this->validate($request, [
            'name' => 'required|string',
            'slug' => 'required|string'
        ]);

        $tag = Tag::find($id);

        $name = $request->input('name');
        $slug = $request->input('slug');

        $tag->name = $name;
        $tag->slug = $slug;

        $tag->save();

        return redirect()->route('tag.index')->with(['message' => 'The tag has been updated !']);
    }

    public function delete($id){
        $tag = Tag::find($id);
        $tag->delete();
        return redirect()->route('tag.index')->with(['message' => 'Your tag has been deleted successfully!']);
    }
}
