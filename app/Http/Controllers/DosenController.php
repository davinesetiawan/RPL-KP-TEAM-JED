<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dosen;
use Auth;

class DosenController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $dsn = Dosen::all();
        return view('dosen', ['dsn' => $dsn]);
    }

    public function edit($id_dosen) 
    {
        $dsn = Dosen::find($id_dosen);
        return view('editdosen', ['dsn' => $dsn]);
    }

    public function updated(Request $request)
    {
        $nik=Auth::user()->nik;
        $id_dosen=Auth::user()->id_dosen;  
        $email=Auth::user()->email;  
        DB::table('dosen')->update([
            'nama_dosen' => $request->nama_dosen,
            'no_telp_dosen' => $request->no_telp_dosen,
        ]);
        return redirect('/dosen');
    }
}
