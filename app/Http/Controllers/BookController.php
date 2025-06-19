<?php

namespace App\Http\Controllers;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Category;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $book=book::with(['author', 'publisher', 'category'])->orderBy('created_at','desc')->get();
       return view('manage.book.index',['book'=>$book]); 
    }

    public function show(book $book) {
       return view('manage.book.show',['book'=>$book]);
    }

    public function create() {
        $category=Category::all();
        $author=Author::all();
        $publisher=Publisher::all();
         return view('manage.book.create',["author"=>$author,"category"=>$category,"publisher"=>$publisher,]);
    }

    public function store(Request $request) {
        $validated=$request->validate([
        'title'=>'required|string',
        'author_id'=>'required|exists:authors,id',
        'publisher_id'=>'required|exists:publishers,id',
        'edition'=>'required|integer',
        'category_id'=>'required|exists:categories,id',
        'quantity'=>'required|integer',
        'image'=>'nullable|mimes:png,jpg,jpeg,webp'
        
      ]);
      if($request->has('image')){
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename=time().'.'.$extension;
            $path='uplaod/photo/';
            $file->move($path,$filename);
            $validated['image'] = $path.$filename;

        }
      book::create($validated);
      return redirect()->route('book.index');
    }
    public function edit(book $book)
    {
        $category=Category::all();
        $author=Author::all();
        $publisher=Publisher::all();
       return view('manage.book.edit', ["book"=>$book,"author"=>$author,"category"=>$category,"publisher"=>$publisher]);
    }
   public function update(Request $request ,book $book)
    {
         $validated = $request->validate([
        'title' => 'required|string',
        'author_id' => 'required|exists:authors,id',
        'publisher_id' => 'required|exists:publishers,id',
        'edition' => 'required|integer',
        'category_id' => 'required|exists:categories,id',
        'quantity' => 'required|integer',
        'image'=>'nullable|mimes:png,jpg,jpeg,webp',
    ]);
    if($request->hasFile('image')){
            if ($book->image && file_exists(public_path($book->image))) {
                unlink(public_path($book->image));
            }
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename=time().'.'.$extension;
            $path='uplaod/photo/';
             $file->move(public_path($path), $filename);
            $validated['image'] = $path.$filename;

        }
        $book->update($validated);
        return redirect()->route('book.show',$book->id);
    
    }
    public function destroy(book $book) {
     $book->delete();
      return redirect()->route('book.index');
    }
}
