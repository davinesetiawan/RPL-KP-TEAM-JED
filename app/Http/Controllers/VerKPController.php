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
        $id=Auth::guard('dosen')->user()->id;  
        $nik=Auth::guard('dosen')->user()->nik;
        $kp = KP::where('id_kp', $id_kp)->first();
        return view('editVerKP', ['kp' => $kp]);
        // return $kp;
    }

    public function updated(Request $request)
    {
        $id=Auth::guard('dosen')->user()->id;  
        $nik=Auth::guard('dosen')->user()->nik;
        KP::where('id_kp',$request->id_kp)->update([
            'status_kp' => $request->status_kp
        ]);  
        return redirect('/verkp');
    }
}
