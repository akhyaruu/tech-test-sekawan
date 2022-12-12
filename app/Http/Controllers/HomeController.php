<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');

        switch (Auth::user()->role_id) {
            case '1':
                // return redirect()->route('user');
                return view('home');
                break;
            case '2':
                return redirect()->route('user');
                break;
            case '3':
                return redirect()->route('user');
                break;
            default:
                return view('home');
                break;
        }
    }
}