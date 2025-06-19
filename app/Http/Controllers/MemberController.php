<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $member=Member::orderBy('created_at','desc')->get();
      return view('manage.member.index',["member"=>$member]);
    }

    public function show(Member $member) {
       return view('manage.member.show',["member"=>$member]);
    }

    public function create() {
       return view('manage.member.create');
    }

    public function store(Request $request) {
      $validated=$request->validate([
        'name'=>'required|string',
        'gender'=>'required|string',
        'phone_number'=>'required|integer',
      ]);
      Member::create($validated);
      return redirect()->route('member.index');
    }
    public function edit(Member $member)
    {
      return view('manage.member.edit',["member"=>$member]);
    }
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required|string',
            'gender' => 'required|string',
            'phone_number' => 'required|integer',
        ]);
        $member->update([
            'name' => $request->input('name'),
            'gender' => $request->input('gender'),
            'phone_number' => $request->input('phone_number'),
    ]);
        return redirect()->route('member.show',$member->id);
    }
    public function destroy(Member $member) {
      $member->delete();
      return redirect()->route('member.index');
    }
}
