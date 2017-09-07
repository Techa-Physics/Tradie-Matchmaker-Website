<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

       
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->Call(CategoriesTableSeeder::class);
        $this->Call(AdvertisementTableSeeder::class);
        $this->Call(ReviewTableSeeder::class);
        Model::reguard();
    }
}
