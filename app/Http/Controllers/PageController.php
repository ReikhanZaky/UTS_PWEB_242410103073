<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemenang;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = Pemenang::where('username', $request->username)
                        ->where('password', $request->password)
                        ->first();

        if ($user) {
            session(['user' => $user]);
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Username atau Password salah!');
    }

    public function dashboard()
    {
        if (!session('user')) return redirect()->route('login');
        $user = session('user');
        return view('dashboard', compact('user'));
    }

    public function pengelolaan()
    {
        if (!session('user')) return redirect()->route('login');
        $pemenang = Pemenang::all();
        return view('pengelolaan', compact('pemenang'));
    }

    public function profile()
    {
        if (!session('user')) return redirect()->route('login');
        $user = session('user');
        return view('profile', compact('user'));
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}
