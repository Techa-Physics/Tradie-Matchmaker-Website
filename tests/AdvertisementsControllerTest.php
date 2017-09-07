<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdvertisementsControllerTest extends TestCase
{
	// https://laravel.com/docs/5.1/testing
	
	// uses AdvertisementsController@index
	public function testAdvertisementsIndexRoute()
	{
		$this->visit('/advertisements')
			->see('Latest Advertisements');
	}
	
	// TODO: 
	// tests with users having different account types
	// (Currently missing documentation for testing with roles)
	
/* 	public function testSeeLogoutNav()
	{
		$user = factory(App\User::class)->create();
		
		$this->actingAs($user)
			->withSession(['what' => 'why'])
			->visit('/')
			->see('Logout');
	} */
}