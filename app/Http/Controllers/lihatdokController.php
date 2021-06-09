<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lihatdokController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $dokumen=$request->get('id');
        return view('lihatdok',compact('dokumen'));
    }
}
