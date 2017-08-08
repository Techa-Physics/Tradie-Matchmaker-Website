<?php

# Code adapted from
# https://laravel.com/docs/5.4/database

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function index()
	{
		$users = DB::select('select * from tradie_users');
		
		return view('user.index', ['users' => $users]);
	}
}