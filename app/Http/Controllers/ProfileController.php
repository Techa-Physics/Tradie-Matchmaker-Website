<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Advertisement;
use App\Review;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {  
        $ads = Advertisement::where('user_id','=',auth()->user()->id)->get();
        //$ra = Advertisement::find($ads->id);
        //$rating = DB::table('reviews')->where('ad_id',$ad->id)->avg('rating');

        return view('profile.index')->with('ads', $ads);//->with('ra',$ra);
    }
}