<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_personal = Role::where('name', 'Personal')->first();
        $role_business = Role::where('name', 'Business')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@email.com';
        $admin->password = bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($role_admin);
        
        $author = new User();
        $author->name = 'Business';
        $author->email = 'business@email.com';
        $author->password = bcrypt('123456');
        $author->save();
        $author->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Personal';
        $user->email = 'personal@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_personal);

        
    }
}
