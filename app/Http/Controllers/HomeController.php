<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $locations = Location::orderBy('updated_at', 'desc')->paginate(2);
        
        if (Auth::check()) {
            return view('home')->with('locations', $locations );
        }
        return view('welcome');
    }
}
