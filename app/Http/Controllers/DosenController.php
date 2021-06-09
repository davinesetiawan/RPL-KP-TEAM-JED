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
        $this->middleware('auth:dosen');
    }

    public function index() {
        $id=Auth::guard('dosen')->user()->id;  
        $nik=Auth::guard('dosen')->user()->nik;
        $email_dosen=Auth::guard('dosen')->user()->email_dosen;  
        $dsn = Dosen::where('id',$id)->first();
        return view('dosen', ['dsn' => $dsn]);
    }

    public function edit($id) 
    {
        $dsn = Dosen::find($id);
        return view('editdosen', ['dsn' => $dsn]);
    }

    public function updated(Request $request)
    {
        $id=Auth::guard('dosen')->user()->id;  
        $email_dosen=Auth::guard('dosen')->user()->email_dosen;  
        DB::table('dosen')->where('id', $id)->update([
            'nik' => $request->nik,
            'nama_dosen' => $request->nama_dosen,
            'no_telp_dosen' => $request->no_telp_dosen,
            'posisi' => $request->posisi,
        ]);
        return redirect('/dosen');
    }
}
