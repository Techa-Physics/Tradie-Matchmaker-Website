<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Advertisement;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$user_id = auth()->user('id');
        //$user = User::find($user_id);
        $ads = Advertisement::where('user_id','=',auth()->user()->id)->get();
        return view('profile.index')->with('ads', $ads);
    }
}