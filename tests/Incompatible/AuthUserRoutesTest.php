<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthUserRoutesTest extends TestCase
{
	// WARNING
	// CREATES NEW USERS ON DATABASE

	public function testSeeYourProfileNav()
	{
		$user = factory(App\User::class)->create();
		
		$this->actingAs($user)
			->withSession(['what' => 'why'])
			->visit('/')
			->see('Your Profile');
	}
	
	public function testSeeLogoutNav()
	{
		$user = factory(App\User::class)->create();
		
		$this->actingAs($user)
			->withSession(['what' => 'why'])
			->visit('/')
			->see('Logout');
	}
	
	public function testProfileIndex()
	{
		$user = factory(App\User::class)->create();
		
		$this->actingAs($user)
			->withSession(['what' => 'why'])
			->visit('/profile')
			->see('Hello, '.$user->name);
	}
	
	public function testLogoutFromProfileIndex()
	{
		$user = factory(App\User::class)->create();
		
		$this->actingAs($user)
			->withSession(['what' => 'why'])
			->visit('/profile')
			->click('Logout')
			->seePageIs('/');
	}
	
	public function testLogoutFromHomePage()
	{
		$user = factory(App\User::class)->create();
		
		$this->actingAs($user)
			->withSession(['what' => 'why'])
			->visit('/')
			->click('Logout')
			->seePageIs('/');
	}
	
	public function testVisitRegisterPage()
	{
		$user = factory(App\User::class)->create();
		
		$this->actingAs($user)
			->withSession(['what' => 'why'])
			->visit('/auth/register')
			->seePageIs('/');
	}
	
	public function testVisitLoginPage()
	{
		$user = factory(App\User::class)->create();
		
		$this->actingAs($user)
			->withSession(['what' => 'why'])
			->visit('/auth/login')
			->seePageIs('/');
	}
	
	public function testLogoutRedirectFromProfilePage()
	{
		$user = factory(App\User::class)->create();
		
		$this->actingAs($user)
			->withSession(['what' => 'why'])
			->visit('/profile')
			->click('Logout')
			->seePageIs('/');
	}
}