<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterAndLoginTest extends TestCase
{
	// Code referenced from
	// https://laravel.com/docs/5.1/testing
	
	public function testRegisterFormAsBusiness()
	{
		$this->visit('/auth/register')
			->type('Register Test', 'name')
			->type('RegisterTest@gmail.com', 'email')
			->type('123456', 'password')
			->type('123456', 'password_confirmation')
			->select('Business', 'role')
			->press('Register')
			->seePageIs('/profile')
			->see('Your advertisements');
	}
	
	public function testLoginForm()
	{
		$this->visit('/auth/login')
			->type('RegisterTest@gmail.com', 'email')
			->type('123456', 'password')
			->press('Login')
			->seePageIs('/profile');
	}
	
	public function testRegisterFormUnmatchingPassword() {
		$this->visit('/auth/register')
			->type('Register Test', 'name')
			->type('RegisterTest@gmail.com', 'email')
			->type('123456', 'password')
			->select('Business', 'role')
			->press('Register')
			->seePageIs('/auth/register')
			->see('The password confirmation does not match.');
	}
	
	public function testLoginFormWrongPassword()
	{
		$this->visit('/auth/login')
			->type('RegisterTest@gmail.com', 'email')
			->type('1', 'password')
			->press('Login')
			->seePageIs('/auth/login')
			->see('These credentials do not match our records.');
	}
}