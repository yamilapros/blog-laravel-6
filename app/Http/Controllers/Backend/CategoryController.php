<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id', 'desc')->get();
        return view('Backend.category.index', compact('categories'));
    }

    public function create(){
        return view('Backend.category.create');
    }

    public function save(Request $request){
        
        $validate = $this->validate($request, [
            'name' => 'required|string',
            'slug' => 'required|string'
        ]);

        $category = new Category();

        $name = $request->input('name');
        $slug = $request->input('slug');

        $category->name = $name;
        $category->slug = $slug;

        $category->save();

        return redirect()->route('category.index')->with(['message' => 'The category has been created !']);
    }

    public function edit($id){
        $category = Category::find($id);
        return view('Backend.category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id){
        
        $validate = $this->validate($request, [
            'name' => 'required|string',
            'slug' => 'required|string'
        ]);

        $category = Category::find($id);

        $name = $request->input('name');
        $slug = $request->input('slug');

        $category->name = $name;
        $category->slug = $slug;

        $category->save();

        return redirect()->route('category.index')->with(['message' => 'The category has been updated !']);
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with(['message' => 'Your category has been deleted successfully!']);
    }
}
