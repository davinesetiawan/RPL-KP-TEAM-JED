<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SuratKP;
use App\Mahasiswa;
use Auth;

class SuratKPController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
   
    public function index() {
        $id=Auth::user()->id;
        $nim=Auth::user()->nim;
        $skp = SuratKP::where('id',$id)->get();
        return view('viewsuratkp', ['skp' => $skp]);
    }

    public function tambahSurat()
    {
        return view('tambahSurat');
    }

    public function simpan(Request $request)
    {
        $fullname = $request->file('dokumen')->getClientOriginalName();
        $nim=Auth::user()->nim;
        $extn =$request->file('dokumen')->getClientOriginalExtension();
        $final= $nim.'SKP'.'_'.time().'.'.$extn; //tulisan file
        $path = $request->file('dokumen')->storeAs('public/skp', $final);

        $nim=Auth::user()->nim;
        $id=Auth::user()->id;  
        DB::table('suratkp')->insert([
            'id' => $id,
            'nim' => $nim,
            'semester' => $request->semester,
            'tahun_kp' => $request->tahun_kp,
            'telp_lembaga' => $request->telp_lembaga,
            'alamat' => $request->alamat,
            'lembaga' => $request->lembaga,
            'dokumen' => $final,
            'pimpinan' => $request->pimpinan,
            'fax' => $request->fax
        ]);
        return redirect('/suratkp');
    }

    public function edit($id_skp) 
    {
        $id=Auth::user()->id;
        $nim=Auth::user()->nim;
        $skp = SuratKP::where('id_skp', $id_skp)->first();
        return view('editSurat', ['skp' => $skp]);
        // return $skp;
    }

    public function updated(Request $request)
    {
        $fullname = $request->file('dokumen')->getClientOriginalName();
        $nim=Auth::user()->nim;
        $extn =$request->file('dokumen')->getClientOriginalExtension();
        $final= $nim.'SKP'.'_'.time().'.'.$extn; //tulisan file
        $path = $request->file('dokumen')->storeAs('public/skp', $final);

        $nim=Auth::user()->nim;
        $id=Auth::user()->id;  
        $email=Auth::user()->email;
        SuratKP::where('id_skp',$request->id_skp)->update([
            'semester' => $request->semester,
            'tahun_kp' => $request->tahun_kp,
            'alamat' => $request->alamat,
            'lembaga' => $request->lembaga,
            'dokumen' => $final,
            'pimpinan' => $request->pimpinan,
            'fax' => $request->fax,
        ]);  
        return redirect('/suratkp');
        //return $request;
    }

    public function delete($id_skp) 
    {
        SuratKP::where('id_skp', $id_skp)->delete();
        return redirect ('/suratkp');
    }

}
