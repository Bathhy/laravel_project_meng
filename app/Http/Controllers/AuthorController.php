<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $author=Author::orderBy('created_at','desc')->get();
      return view('manage.author.index',["author"=>$author]);
    }

    public function show(Author $author) {
        return view('manage.author.show',["author"=>$author]);
    
    }

    public function create() {
        return view('manage.author.create');
    }

    public function store(Request $request) {
      $validated=$request->validate([
        'name'=>'required|string',
        'adress'=>'required|string',
        'phone_number'=>'required|integer',
      ]);
      Author::create($validated);
      return redirect()->route('author.index');
    }
    public function edit(Author $author)
    {
      return view('manage.author.edit', ["author"=>$author]);
    }
   public function update(Request $request ,Author $Author)
    {
        $request->validate([
            'name' => 'required|string',
            'adress' => 'required|string',
            'phone_number' => 'required|integer',
        ]);
        $Author->update([
            'name' => $request->input('name'),
            'adress' => $request->input('adress'),
            'phone_number' => $request->input('phone_number'),
    ]);
        return redirect()->route('author.show',$Author->id);
    }
    public function destroy(Author $Author) {
      $Author->delete();
      return redirect()->route('author.index');
    }
}
