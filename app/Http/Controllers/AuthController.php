<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        
        
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == "ADMIN") {
                return redirect("cars")->withSuccess('Signed in');
            }
            if (Auth::user()->role == "USER") {
                return redirect("user")->withSuccess('Signed in');
            }
        }
        
        return redirect("login")->withSuccess('Login details are not valid');
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

    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

}
