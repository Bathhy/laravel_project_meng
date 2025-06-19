<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $category=Category::orderBy('created_at','desc')->get();
      return view('manage.category.index',["category"=>$category]);
    }

    public function show(Category $category) {
      return view('manage.category.show',["category"=>$category]);
    }

    public function create() {
      return view('manage.category.create');
    }

    public function store(Request $request) {
      $validated=$request->validate([
        'name'=>'required|string'
      ]);
      Category::create($validated);
      return redirect()->route('category.index');
    }
    public function edit(Category $category)
    {
      //$category=Category::findOrFail($id);
        return view('manage.category.edit', ["category"=>$category]);
    }
    public function update(Request $request ,Category $category)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $category->update([
        'name' => $request->input('name'),
    ]);
        return redirect()->route('category.show', $category->id);
    }
    public function destroy(Category $category) {
      $category->delete();
      return redirect()->route('category.index');
    }

}
