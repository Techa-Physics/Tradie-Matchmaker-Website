<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterAndLoginTest extends TestCase
{
	public function testRegister()
	{
		$this->visit('/auth/register')
			->type('TestCase User', 'name')
			->type('TestCaseUser@gmail.com', 'email')
			->type('abc123', 'password')
			->type('abc123', 'password_confirmation')
			->press('Register')
			->seePageIs('/profile');
	}
	
	public function testLogin()
	{
		$this->visit('/auth/login')
			->type('TestCaseUser@gmail.com', 'email')
			->type('abc123', 'password')
			->press('Login')
			->seePageIs('/profile/');
	}
}