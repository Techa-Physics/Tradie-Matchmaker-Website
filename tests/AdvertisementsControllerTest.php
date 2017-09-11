<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdvertisementsControllerTest extends TestCase
{
	// Code referenced from
	// https://laravel.com/docs/5.1/testing
	
	// TODO: 
	// Tests with users having different account types (Currently missing documentation for testing with roles)
	// Tests to view, edit, and delete individual created advertisements as a business
	
	// uses AdvertisementsController@index
	public function testAdvertisementsIndexRoute()
	{
		$this->visit('/advertisements')
			->see('Latest Advertisements');
	}
	
	// Adding a database entry here for now,
	// still finding suitable solution for factory and actingAs method
	public function testRegisterFormAsBusiness()
	{
		$this->visit('/auth/register')
			->type('AdvCon Test', 'name')
			->type('AdvConTest@gmail.com', 'email')
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
			->type('AdvConTest@gmail.com', 'email')
			->type('123456', 'password')
			->press('Login')
			->seePageIs('/profile');
	}
	
	public function testCreateAdvertisementForm()
	{
		$this->visit('/advertisements/create')
			->type('AdvCon Tests', 'name')
			->select('Air Conditioning', 'service')
			->type('Advertisements Controller test', 'body')
			->type('0', 'quote')
			->type('Sunbury, 3429', 'location')
			->type('0412345678', 'phone')
			->type('25', 'max_dist')
			->press('submit')
			->see('Your advertisements')
			->see('AdvCon Tests');
	}
	
	public function testSeeCreatedAdvertisementInAdvertisements()
	{
		$this->visit('/advertisements')
			->click('AdvCon Tests')
			->see('Contact Information:');
	}
}