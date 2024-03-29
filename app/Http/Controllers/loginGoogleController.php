<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Dosen;
use App\Periode;
use Socialite;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Str;

class loginGoogleController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request)
    {
        try{
            $googleUser = Socialite::driver('google')->stateless()->user();

            $existMhs = Mahasiswa::Where('email',$googleUser->email)->first();
            $existDosen= Dosen::Where('email_dosen',$googleUser->email)->first();

            if($existMhs){
                Auth::login($existMhs);
                $periode = Periode::where('status','=', 1)->value('id_period');
                Mahasiswa::where('nim', Auth::user()->nim)->update(['id_period' => $periode]);
                return redirect()->to('/mahasiswa');
                // return Auth::user()->nim;
            }
            elseif($existDosen) {
                Auth::guard('dosen')->login($existDosen);
                return redirect()->to('/homedsn');
            }
            else {
                if(Str::endsWith($googleUser->email, "@si.ukdw.ac.id"))
                {
                    $mahasiswa = new mahasiswa;
                    $mahasiswa->nama_mhs = $googleUser->name;
                    $mahasiswa->email = $googleUser->email;
                    // $mahasiswa->google_id = $googleUser->id;
                    $mahasiswa->save();
                    Auth::login($mahasiswa);
                    return redirect()->to('/mahasiswa');
                } 
                elseif(Str::endsWith($googleUser->email, "@gmail.com"))
                {
                    $dosen = new dosen;
                    $dosen->nama_dosen = $googleUser->name;
                    $dosen->email_dosen = $googleUser->email;
                    // $dosen->google_id = $googleUser->id;
                    $dosen->save();
                    Auth::guard('dosen')->login($dosen);
                    return redirect()->to('/dosen');
                }
            }
        }catch(Exception $e){
            return 'error';
        }
    }
    public function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }
}
