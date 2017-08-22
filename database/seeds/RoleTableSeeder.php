<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->save();
        
        $role_business = new Role();
        $role_business->name = 'Business';
        $role_business->save();

        $role_personal = new Role();
        $role_personal->name = 'Personal';
        $role_personal->save();

        
    }
}
