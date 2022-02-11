<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['determine']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route(auth()->user()->role);
    }

    public function determine(Request $request)
    {
        //dd($request);
        $user = User::where('mobile_number', '=', $request['mobile_number'])->first();
        //dd(Hash::check(request('password'), $user->password));
        if (empty($user) or !Hash::check(request('password'), $user->password)) {
            return redirect()->back();
        }
        Auth::login($user);
        return redirect()->route('admin');
    }
}
