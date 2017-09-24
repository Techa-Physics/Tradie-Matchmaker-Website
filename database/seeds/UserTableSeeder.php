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

        $user = new User();
        $user->name = 'Seymour Butts';
        $user->email = '1@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'John Huyn';
        $user->email = '2@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Rihanna Bovezza';
        $user->email = '3@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Aaron Smith';
        $user->email = '4@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Nurnin Egg';
        $user->email = '5@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Anita Bath';
        $user->email = '6@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Al Coholic';
        $user->email = '7@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jocque Strap';
        $user->email = '8@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Qurny Jones';
        $user->email = '9@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Bo Prablem';
        $user->email = '10@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Graham Roberts';
        $user->email = '11@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Cris Brown';
        $user->email = '12@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Sean Puale';
        $user->email = '13@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Donald Hovendone';
        $user->email = '14@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Tory Lane';
        $user->email = '15@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Boban Jones';
        $user->email = '16@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jordan Reynolds';
        $user->email = '17@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Peter Vlahus';
        $user->email = '18@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Nick Morgov';
        $user->email = '19@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Stefan Rozman';
        $user->email = '20@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Darryl Radman';
        $user->email = '21@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Lubor Instrunio';
        $user->email = '22@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Thung Thin';
        $user->email = '23@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Drake Rachid';
        $user->email = '24@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jordan Dilman';
        $user->email = '25@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jake Pavasol';
        $user->email = '26@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jack Plumbo';
        $user->email = '27@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Tinashe Revineship';
        $user->email = '28@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Larry Nukine';
        $user->email = '29@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Luke Parune';
        $user->email = '30@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Kane N Kung';
        $user->email = '31@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Harry Psarianos';
        $user->email = '32@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Mark Orval';
        $user->email = '33@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Alex Kunal';
        $user->email = '34@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Dane Masters';
        $user->email = '35@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Dante Thomas';
        $user->email = '36@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jake Davidson';
        $user->email = '37@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Connor Maynard';
        $user->email = '38@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Sen Santional';
        $user->email = '39@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Harlan Dondlinger';
        $user->email = '40@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Homer Jansen';
        $user->email = '41@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Hank Azaria';
        $user->email = '42@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Hans Moleman';
        $user->email = '43@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Barney Gumble';
        $user->email = '44@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Moe Szyslak';
        $user->email = '45@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Dario Wozniak';
        $user->email = '46@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Kid Azaria';
        $user->email = '47@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jimbo Jones';
        $user->email = '48@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Max Finward';
        $user->email = '49@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Kerney Azaria';
        $user->email = '50@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'John Lamanner';
        $user->email = '51@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Drake Ununel';
        $user->email = '52@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Lil Jon';
        $user->email = '53@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'James Azaria';
        $user->email = '54@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Kearney Zzyzwicz';
        $user->email = '55@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Dolph Starbeam';
        $user->email = '56@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'James Hankstown';
        $user->email = '57@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'James Kineral';
        $user->email = '58@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Timmy Tuner';
        $user->email = '59@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'James Antanasovski';
        $user->email = '60@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Khaled Khaled';
        $user->email = '61@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Adam Jones';
        $user->email = '62@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Boris Jones';
        $user->email = '63@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'David Kynstral';
        $user->email = '64@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jake Punoris';
        $user->email = '65@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Baris Kaya';
        $user->email = '66@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Yung Poloid';
        $user->email = '67@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Peter Davidson';
        $user->email = '68@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jurn Yaven';
        $user->email = '69@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Quorn Yaven';
        $user->email = '70@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Michael Johns';
        $user->email = '71@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'John Mayne';
        $user->email = '72@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Porter Robinson';
        $user->email = '73@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Mark Kunstal';
        $user->email = '74@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Pete Rodman';
        $user->email = '75@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Pete Villa';
        $user->email = '76@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Omarion';
        $user->email = '77@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jake Pernt';
        $user->email = '78@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Kerney Johns';
        $user->email = '79@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Dorf Smurnoff';
        $user->email = '80@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jake Constall';
        $user->email = '81@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Dolph Kong';
        $user->email = '82@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'John Omarion';
        $user->email = '83@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jake Punt';
        $user->email = '84@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Kerney Hurnstown';
        $user->email = '85@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Dolph Kole';
        $user->email = '86@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jake Forms';
        $user->email = '87@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Jay Raz';
        $user->email = '88@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Rolph Kang';
        $user->email = '89@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = 'Ralph Wiggum';
        $user->email = '90@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);
/*
        $user = new User();
        $user->name = '';
        $user->email = '91@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = '';
        $user->email = '92@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = '';
        $user->email = '93@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = '';
        $user->email = '94@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = '';
        $user->email = '95@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = '';
        $user->email = '96@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = '';
        $user->email = '97@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = '';
        $user->email = '98@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = '';
        $user->email = '99@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);

        $user = new User();
        $user->name = '';
        $user->email = '100@email.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_business);
*/
        
    }
}
