<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
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
    public function alam()
    {
        return view('pages.category.alam');
    }

    public function kerajinan()
    {
        return view('pages.category.kerajinan');
    }

    public function pendidikan()
    {
        return view('pages.category.pendidikan');
    }
    public function religi()
    {
        return view('pages.category.religi');
    }
    public function sejarah()
    {
        return view('pages.category.sejarah');
    }
}
