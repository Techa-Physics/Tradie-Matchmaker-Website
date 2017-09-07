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

        $user = new User();
        $user->name = 'Arthur Curry';
        $user->email = 'a.curry@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Bruce Wayne';
        $user->email = 'b.wayne@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Cassandra Cain';
        $user->email = 'c.cain@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Dinah Lance';
        $user->email = 'd.Lance@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);
        
        $user = new User();
        $user->name = 'Eobard Thrawne';
        $user->email = 'e.thrawne@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Felicity Smoke';
        $user->email = 'f.Smoke@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Guy Gardner';
        $user->email = 'g.gardner@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Hal Jordan';
        $user->email = 'h.jordan@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Iris West';
        $user->email = 'i.west@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jason Todd';
        $user->email = 'j.todd@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Kyle Rayner';
        $user->email = 'k.rayner@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Lex Luthor';
        $user->email = 'l.luthor@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Malcolm Merlyn';
        $user->email = 'm.merlyn@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Nick Fury';
        $user->email = 'n.fury@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Oliver Queen';
        $user->email = 'o.queen@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Peter Parker';
        $user->email = 'p.parker@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Qunintin Lance';
        $user->email = 'q.lance@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Ray Palmer';
        $user->email = 'r.palmer@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Selina Kyle';
        $user->email = 's.kylen@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Thor Odinson';
        $user->email = 't.odinson@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Vandal Savage';
        $user->email = 'v.savagen@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Wally West';
        $user->email = 'w.west@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Zantanna Zatara';
        $user->email = 'z.zatara@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);
    }
}
