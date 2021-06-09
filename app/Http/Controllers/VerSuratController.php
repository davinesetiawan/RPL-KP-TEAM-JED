<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SuratKP;
use App\Mahasiswa;
use App\Dosen;
use Auth;

class VerSuratController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth:dosen');
    }
   
    public function index() {
        $skp=SuratKP::all();
        return view('verTableSurat', compact('skp'));
    }

    public function edit($id_skp) 
    {
        $id=Auth::guard('dosen')->user()->id;  
        $nik=Auth::guard('dosen')->user()->nik;
        $skp = SuratKP::where('id_skp', $id_skp)->first();
        return view('editVerSurat', ['skp' => $skp]);
        //return $skp;
    }

    public function updated(Request $request)
    {
        $id=Auth::guard('dosen')->user()->id;  
        $nik=Auth::guard('dosen')->user()->nik;
        SuratKP::where('id_skp',$request->id_skp)->update([
            'status_skp' => $request->status_skp
        ]);  
        return redirect('/versurat');
    }
    
}
