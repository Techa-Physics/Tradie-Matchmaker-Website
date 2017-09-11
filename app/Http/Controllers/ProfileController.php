<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Advertisement;
use App\Review;
use App\Search;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {  
        $ads = Advertisement::where('user_id','=',auth()->user()->id)->get();
        $searches = Search::where('user_id','=',auth()->user()->id)->get();
        return view('profile.index')->with('ads', $ads)->with('searches',$searches);
    }
}