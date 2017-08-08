<?php

namespace App\Http\Controllers\Auth;

/* use App\User;
use Validator; */
use App\Http\Controllers\Controller;
/* use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers; */
use Socialite;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    // use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    } */

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /* protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }
 */
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    /* protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    } */
	
	// Code adapted from https://laravel.com/docs/5.1/authentication#social-authentication
	public function redirectToGoogle()
	{
		return Socialite::driver('google')->redirect();
	}
	
	public function handleProviderCallback()
	{
		$user = Socialite::driver('google')-user();
		
		$token = $user->token;
		
		$user->getId(); // not sure if needed from their server
		$user->getNickname();
		$user->getName();
		$user->getEmail();
		
		/* TODO
			Log the user in
			Provide logout via session
		*/
	}
}
