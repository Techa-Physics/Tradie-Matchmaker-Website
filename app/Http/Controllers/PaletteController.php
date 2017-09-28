<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Auth;

class PaletteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
        if(Auth::user()->hasRole("Admin"))
        {
            return view('palette.index');
        }
        else
        {
            return redirect()->back();
        }
    }
    
    
}