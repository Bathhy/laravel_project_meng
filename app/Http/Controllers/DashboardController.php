<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Member;
use App\Models\book;

class DashboardController extends Controller
{
    public function index(){
        $bookcount=book::count();
        $membercount=Member::count();
        $borrowcount=Borrow::count();
        return view('manage.dashboard.index',compact('bookcount', 'membercount','borrowcount'));
    }
}
