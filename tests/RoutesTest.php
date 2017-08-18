<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoutesTest extends TestCase
{
	public function testHome()
	{
		$this->visit('/')
			->click('Where\'s My Tradie')
			->seePageIs('/');
	}
	
	public function testAbout()
	{
		$this->visit('/')
			->click('About')
			->seePageIs('/about');
	}
	
	public function testRegistration()
	{
		$this->visit('/')
			->click('Register')
			->seePageIs('/auth/register');
	}
	
	public function testLogin()
	{
		$this->visit('/')
			->click('Login')
			->seePageIs('/auth/login');
	}
	
	public function testVisitProfile()
	{
		$this->visit('/')
			->visit('/profile')
			->seePageIs('/auth/login');
	}
}