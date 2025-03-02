<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Filament\Facades\Filament;

class DukunganController extends Controller
{
    public function term()
    {
        return view('dukungan.kondisi');
    }
    public function about()
    {
        return view('dukungan.about');
    }
    public function privacy()
    {
        return view('dukungan.privacy');
    }
    public function logout(Request $request)
    {
        Filament::auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
