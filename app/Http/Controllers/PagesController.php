<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\User;

class PagesController extends Controller
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

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function category()
    {
        return view('pages.category');
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function wishlist()
    {
        $locations = auth()->user()->locations()->get();
        return view('pages.wishlist')->with('locations', $locations );
    }
}
