<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PraKP;
use App\Mahasiswa;
use App\Dosen;
use Auth;

class VerPraKPController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth:dosen');
    }
   
    public function index() {
        $pkp=PraKP::all();
        return view('verPraKp', compact('pkp'));
        // return $pkp;
    }

    public function edit($id_prakp) 
    {
        $id=Auth::guard('dosen')->user()->id;  
        $nik=Auth::guard('dosen')->user()->nik;
        $pkp = PraKP::where('id_prakp', $id_prakp)->first();
        return view('editVerPkp', ['pkp' => $pkp]);
        // return $pkp;
    }

    public function updated(Request $request)
    {
        $id=Auth::guard('dosen')->user()->id;  
        $nik=Auth::guard('dosen')->user()->nik;
        PraKP::where('id_prakp',$request->id_prakp)->update([
            'status_prakp' => $request->status_prakp
        ]);  
        return redirect('/verprakp');
    }
}
