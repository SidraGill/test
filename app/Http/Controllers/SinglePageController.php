<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function index() {
        return view('app');
    }

    public function getresult(Request $request){
        return response()->json([$request->all()]);
    }

    public function myData(Request $request){
        return response()->json(['posts' => 'my post']);
    }
}
