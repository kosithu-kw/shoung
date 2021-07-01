<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foodpair;

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
      
        return view('home');
    }
    public function getCategories(){
        return view ('categories');
    }
    public function getNewPair(){
        return view ('new-pair');
    }
    
}
