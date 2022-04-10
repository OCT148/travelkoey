<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class CategoryController extends Controller
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
    public function alam()
    {
        $locations = Location::orderBy('updated_at', 'desc')->where('category', 'alam')->paginate(5);
        return view('pages.category.alam')->with('locations', $locations );
    }

    public function kerajinan()
    {
        $locations = Location::orderBy('updated_at', 'desc')->where('category', 'kerajinan')->paginate(5);
        return view('pages.category.kerajinan')->with('locations', $locations );;
    }

    public function pendidikan()
    {
        $locations = Location::orderBy('updated_at', 'desc')->where('category', 'pendidikan')->paginate(5);
        return view('pages.category.pendidikan')->with('locations', $locations );;
    }
    public function religi()
    {
        $locations = Location::orderBy('updated_at', 'desc')->where('category', 'religi')->paginate(5);
        return view('pages.category.religi')->with('locations', $locations );;
    }
    public function sejarah()
    {
        $locations = Location::orderBy('updated_at', 'desc')->where('category', 'sejarah')->paginate(5);
        return view('pages.category.sejarah')->with('locations', $locations );;
    }
}
