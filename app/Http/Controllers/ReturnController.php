<?php

namespace App\Http\Controllers;
use App\Models\ReturnModels;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function index() {
       $returnmodel=ReturnModels::with(['borrow'])->orderBy('created_at','desc')->get();
      return view('manage.return.index',["returnmodel"=>$returnmodel]);
    }

    public function show(ReturnModels $returnmodel) {
      return view('manage.return.show',['returnmodel'=>$returnmodel]);
    }
    public function create() {
     
    }

    public function store() {
     
    }
    public function edit()
    {
      
    }
    public function update()
    {
       
   
   
    }
    public function destroy( ) {
     
    }
}
