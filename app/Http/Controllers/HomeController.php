<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.home');
    }

    public function suivi()
    {
        return view('front.suivi');
    }

    public function fold(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->get('email'))->first();
        if($user) {
            if(\Hash::make($request->get('password')  == $user->password)) {
                return view('front.fold', compact('user'));
            } else {
                return redirect()->back()->with('error', "Dossier Inconnue");
            }
        } else {
            return redirect()->back()->with('error', "Dossier Inconnue");
        }
    }
}
