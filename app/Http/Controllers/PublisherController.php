<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index() {
        $publisher=Publisher::orderBy('created_at','desc')->get();
      return view('manage.publisher.index',["publisher"=>$publisher]);
    }

    public function show(Publisher $publisher) {
      return view('manage.publisher.show',["publisher"=>$publisher]);
    }
    public function create() {
      return view('manage.publisher.create');
    }

    public function store(Request $request) {
      $validated=$request->validate([
        'name'=>'required|string',
        'adress'=>'required|string',
        'phone_number'=>'required|integer',
      ]);
      Publisher::create($validated);
      return redirect()->route('publisher.index');
    }
    public function edit(Publisher $publisher)
    {
       return view('manage.publisher.edit',["publisher"=>$publisher]);
    }
    public function update(Request $request, Publisher $publisher)
    {
        $validated=$request->validate([
            'name' => 'required|string',
            'adress' => 'required|string',
            'phone_number' => 'required|integer',
        ]);
        $publisher->update($validated);
        return redirect()->route('publisher.show',$publisher->id);
   
    }
    public function destroy( Publisher $publisher) {
      $publisher->delete();
      return redirect()->route('publisher.index');
    }
}
