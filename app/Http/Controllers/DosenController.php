<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dosen;

class DosenController extends Controller
{
    public function index() {
        $dsn = Dosen::all();
        return view('dosen', ['dsn' => $dsn]);
    }
}
