<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthUserRoutesTest extends TestCase
{
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
}