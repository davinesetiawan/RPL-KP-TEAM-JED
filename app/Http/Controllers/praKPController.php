<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PraKP;
use App\Mahasiswa;
use Auth;

class praKPController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $id=Auth::user()->id;
        $nim=Auth::user()->nim;
        $pkp = PraKP::where('id',$id)->get();
        return view('viewprakp', ['pkp' => $pkp]);
    }

    public function tambah()
    {
        return view('tambahprakp');
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
        DB::table('prakp')->insert([
            'id' =>$id,
            'nim' => $nim,
            'semester' => $request->semester,
            'tahun_kp' => $request->tahun_kp,
            'tool' => $request->tool,
            'spek' => $request->spek,
            'telp_lembaga' => $request->telp_lembaga,
            'alamat' => $request->alamat,
            'lembaga' => $request->lembaga,
            'dokumen' => $request->dokumen,
            'pimpinan' => $request->pimpinan,
            'fax' => $request->fax,
            'wkt_pel_kp' => $request->wkt_pel_kp

        ]);
        return redirect('/prakp');
    }

    public function edit($id_prakp) 
    {
        $id=Auth::user()->id;
        $nim=Auth::user()->nim;
        $pkp = PraKP::where('id_prakp', $id_prakp)->first();
        return view('editprakp', ['pkp' => $pkp]);
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
        PraKP::where('id_prakp', $request->id_prakp)->update([
            'semester' => $request->semester,
            'tahun_kp' => $request->tahun_kp,
            'tool' => $request->tool,
            'spek' => $request->spek,
            'telp_lembaga' => $request->telp_lembaga,
            'alamat' => $request->alamat,
            'lembaga' => $request->lembaga,
            'dokumen' => $request->dokumen,
            'pimpinan' => $request->pimpinan,
            'fax' => $request->fax,
            'wkt_pel_kp' => $request->wkt_pel_kp,
        ]);
        return redirect('/prakp');
    }

    public function delete($id_prakp) 
    {
        PraKP::where('id_prakp', $id_prakp)->delete();
        return redirect ('/prakp');
    }
}
