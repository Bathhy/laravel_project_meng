<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\book;
use App\Models\Borrow;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
   
    public function index()
    {
        $borrow=Borrow::with(['member', 'book'])->orderBy('created_at','desc')->get();
       return view('manage.borrow.index',['borrow'=>$borrow]); 
    }

    public function create()
    {
        $member=Member::all();
        $book=book::all();
         return view('manage.borrow.create',["member"=>$member,"book"=>$book]);
    }

   
    public function store(Request $request)
    {
        $validated=$request->validate([
        'member_id'=>'required|string',
        'book_id'=>'required|string',
        'borrow_date'=>'required|date',
        'due_date'=>'required|date',
      ]);
      Borrow::create($validated);
      return redirect()->route('borrow.index');
    }

    public function show(Borrow $borrow)
    {
        return view('manage.borrow.show',['borrow'=>$borrow]);
    }

    public function edit(Borrow $borrow)
    {
        $member=Member::all();
        $book=book::all();
        return view('manage.borrow.edit', ["borrow"=>$borrow,"member"=>$member,"book"=>$book]);
    }

    
    public function update(Request $request, Borrow $borrow)
    {
        $validated=$request->validate([
            'member_id'=>'required|string',
            'book_id'=>'required|string',
            'borrow_date'=>'required|date',
            'due_date'=>'required|date',
        ]);
        $borrow->update($validated);
        return redirect()->route('borrow.show',$borrow->id);
    }

    public function destroy(Borrow $borrow)
    {
        $borrow->delete();
      return redirect()->route('borrow.index');
    }
}
