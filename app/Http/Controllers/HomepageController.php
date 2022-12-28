<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomepageController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        return view('home.pages.home');
    }

    public function kategori()
    {
        return view('home.pages.kategori');
    }
}
