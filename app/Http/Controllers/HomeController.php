<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function index()
	{
		
		return view('home.index');
	}
	
	public function about()
	{
		
		return view('home.about');
	}
}