<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\KP;
use App\Mahasiswa;
use App\Dosen;
use Auth;

class VerKPController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth:dosen');
    }
   
    public function index() {
        $kp=KP::all();
        return view('verKP', compact('kp'));
        // return $pkp;
    }

    public function edit($id_kp) 
    {
        $dsn=Dosen::all();
        $id=Auth::guard('dosen')->user()->id;  
        $nik=Auth::guard('dosen')->user()->nik;
        $kp = KP::where('id_kp', $id_kp)->first();
        return view('editVerKP', compact('kp', 'dsn'));
        // return $kp;
    }

    public function updated(Request $request)
    {
        $id=Auth::guard('dosen')->user()->id;  
        $nik=Auth::guard('dosen')->user()->nik;
        KP::where('id_kp',$request->id_kp)->update([
            'status_kp' => $request->status_kp,
            'id_dosen' => $request->id_dosen
        ]);  
        return redirect('/verkp');
    }
}
