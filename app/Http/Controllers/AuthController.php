<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'address' => 'required',
            'no_tlp' => 'required|max:13|',
            'no_sim' => 'required',
            'password' => 'required',
        ]);
        
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'no_tlp' => $request->no_tlp,
                'no_sim' => $request->no_sim,
                'password' => bcrypt($request->password),
                'role' => 'USER',
                
            ]);
            return redirect(route('login'))
                ->withSuccess("Pendaftaran Berhasil, Silahkan Login Untuk Melanjutkan");
                
        } catch(\Exception $e) {
            return redirect()->route('register')->withInput()->withErrors(['msg' => 'Pendaftaran Gagal']);
        }
    }

}
