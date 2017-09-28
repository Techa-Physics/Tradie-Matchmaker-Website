<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Palette;

use Auth, DB;

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
    
    public function show($id)
    {
        $palette = Palette::find(1);
        
        // Replace current palette preference
        $palette->currentPalette = $id;
        $palette->save();

        return view('palette.index');
    }
}