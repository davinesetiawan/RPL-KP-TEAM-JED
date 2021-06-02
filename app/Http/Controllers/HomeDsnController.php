<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeDsnController extends Controller
{
    public function index() {
        return view('homedsn');
    }
}
