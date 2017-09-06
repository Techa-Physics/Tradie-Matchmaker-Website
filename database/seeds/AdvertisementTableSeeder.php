<?php

use Illuminate\Database\Seeder;
use App\Advertisement;
use App\User;

class AdvertisementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $ad = new Advertisement();
        $ad->name = 'Arthurs Air Conditioning';
        $ad->service = "Air Conditioning";
        $ad->quote = 50;
        $ad->body = "We provide the best air to your house.";
        $ad->user_id = User::where('name', 'Arthur Curry')->value('id');
        $ad->location = "Melton, 3337";
        $ad->phone = "0400000001";
        $ad->email = User::where('name', 'Arthur Curry')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = 'Waynes Electrical';
        $ad->service = "Electricians";
        $ad->quote = 50;
        $ad->body = "No more faulty wires if you call me";
        $ad->user_id = User::where('name', 'Bruce Wayne')->value('id');
        $ad->location = "Taylors Lakes, 3038";
        $ad->phone = "0400000002";
        $ad->email = User::where('name', 'Bruce Wayne')->value('email');
        $ad->max_dist = "25";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "Cain's Drains";
        $ad->service = "Drains";
        $ad->quote = 100;
        $ad->body = "Leaky drain, come sya hi to Cain";
        $ad->user_id = User::where('name', 'Cassandra Cain')->value('id');
        $ad->location = "Taylors Lakes, 3038";
        $ad->phone = "0400000003";
        $ad->email = User::where('name', 'Cassandra Cain')->value('email');
        $ad->max_dist = "25";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "Lance's Fences";
        $ad->service = "Fencing";
        $ad->quote = 0;
        $ad->body = "Give us a call between 12pm and 3pm for a free quoat";
        $ad->user_id = User::where('name', 'Dinah Lance')->value('id');
        $ad->location = "Sunbury, 3429";
        $ad->phone = "0400000004";
        $ad->email = User::where('name', 'Dinah Lance')->value('email');
        $ad->max_dist = "50";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "Thrawne's Fencing";
        $ad->service = "Fencing";
        $ad->quote = 50;
        $ad->body = "No fence big or small we cannot handle";
        $ad->user_id = User::where('name', 'Eobard Thrawne')->value('id');
        $ad->location = "Reservoir, 3073";
        $ad->phone = "0400000005";
        $ad->email = User::where('name', 'Eobard Thrawne')->value('email');
        $ad->max_dist = "20";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "Smoke's Fireplaces";
        $ad->service = "Fireplaces";
        $ad->quote = 0;
        $ad->body = "No more being cold in winter, give us a call and we can set you up with a firey fireplace.";
        $ad->user_id = User::where('name', 'Felicity Smoke')->value('id');
        $ad->location = "Essendon, 3040";
        $ad->phone = "0400000006";
        $ad->email = User::where('name', 'Felicity Smoke')->value('email');
        $ad->max_dist = "40";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "Guy Gardner's Gardens";
        $ad->service = "Gardeners";
        $ad->quote = 150;
        $ad->body = "My people will keep your gardens nice and neat";
        $ad->user_id = User::where('name', 'Guy Gardner')->value('id');
        $ad->location = "Pascoe Vale, 3044";
        $ad->phone = "0400000007";
        $ad->email = User::where('name', 'Guy Gardner')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "Hal's Carpentry";
        $ad->service = "Decking";
        $ad->quote = 0;
        $ad->body = "Need a wooden structure up, I can help";
        $ad->user_id = User::where('name', 'Hal Jordan')->value('id');
        $ad->location = "Sunshine, 3020";
        $ad->phone = "0400000008";
        $ad->email = User::where('name', 'Hal Jordan')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "Hal's Carpentry";
        $ad->service = "Carpenters";
        $ad->quote = 0;
        $ad->body = "Need a wooden structure up, I can help";
        $ad->user_id = User::where('name', 'Hal Jordan')->value('id');
        $ad->location = "Sunshine, 3020";
        $ad->phone = "0400000008";
        $ad->email = User::where('name', 'Hal Jordan')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "Hal's Carpentry";
        $ad->service = "Gazebo";
        $ad->quote = 0;
        $ad->body = "Need a wooden structure up, I can help";
        $ad->user_id = User::where('name', 'Hal Jordan')->value('id');
        $ad->location = "Sunshine, 3020";
        $ad->phone = "0400000008";
        $ad->email = User::where('name', 'Hal Jordan')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "Hal's Carpentry";
        $ad->service = "Patios";
        $ad->quote = 0;
        $ad->body = "Need a wooden structure up, I can help";
        $ad->user_id = User::where('name', 'Hal Jordan')->value('id');
        $ad->location = "Sunshine, 3020";
        $ad->phone = "0400000008";
        $ad->email = User::where('name', 'Hal Jordan')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "Hal's Carpentry";
        $ad->service = "Pergolas";
        $ad->quote = 0;
        $ad->body = "Need a wooden structure up, I can help";
        $ad->user_id = User::where('name', 'Hal Jordan')->value('id');
        $ad->location = "Sunshine, 3020";
        $ad->phone = "0400000008";
        $ad->email = User::where('name', 'Hal Jordan')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "West Concreting";
        $ad->service = "Paving";
        $ad->quote = 80;
        $ad->body = "Any concreting needs, concreint, paving, slabs, rendering";
        $ad->user_id = User::where('name', 'Iris West')->value('id');
        $ad->location = "St Albans, 3021";
        $ad->phone = "0400000009";
        $ad->email = User::where('name', 'Iris West')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "West Concreting";
        $ad->service = "Concreting";
        $ad->quote = 0;
        $ad->body = "Any concreting needs, concreint, paving, slabs, rendering";
        $ad->user_id = User::where('name', 'Iris West')->value('id');
        $ad->location = "St Albans, 3021";
        $ad->phone = "0400000009";
        $ad->email = User::where('name', 'Iris West')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "West Concreting";
        $ad->service = "Rendering";
        $ad->quote = 0;
        $ad->body = "Any concreting needs, concreint, paving, slabs, rendering";
        $ad->user_id = User::where('name', 'Iris West')->value('id');
        $ad->location = "St Albans, 3021";
        $ad->phone = "0400000009";
        $ad->email = User::where('name', 'Iris West')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "Todd's Concreting";
        $ad->service = "Concreting";
        $ad->quote = 0;
        $ad->body = "We do drive ways, footpaths, sheds, and house slabs.";
        $ad->user_id = User::where('name', 'Jason Todd')->value('id');
        $ad->location = "Blackburn, 3130";
        $ad->phone = "0400000010";
        $ad->email = User::where('name', 'Jason Todd')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "Rayner's wiring";
        $ad->service = "Electricians";
        $ad->quote = 100;
        $ad->body = "We can wiring anything up in your house";
        $ad->user_id = User::where('name', 'Kyle Rayner')->value('id');
        $ad->location = "Glen Iris, 3146";
        $ad->phone = "0400000011";
        $ad->email = User::where('name', 'Kyle Rayner')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "LEX Corp";
        $ad->service = "Electricians";
        $ad->quote = 0;
        $ad->body = "Making a better world";
        $ad->user_id = User::where('name', 'Lex Luthor')->value('id');
        $ad->location = "South Bank, 3006";
        $ad->phone = "0400000012";
        $ad->email = User::where('name', 'Lex Luthor')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "LEX Corp";
        $ad->service = "Gardeners";
        $ad->quote = 0;
        $ad->body = "Making a better world";
        $ad->user_id = User::where('name', 'Lex Luthor')->value('id');
        $ad->location = "South Bank, 3006";
        $ad->phone = "0400000012";
        $ad->email = User::where('name', 'Lex Luthor')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "LEX Corp";
        $ad->service = "Plumbing";
        $ad->quote = 0;
        $ad->body = "Making a better world";
        $ad->user_id = User::where('name', 'Lex Luthor')->value('id');
        $ad->location = "South Bank, 3006";
        $ad->phone = "0400000012";
        $ad->email = User::where('name', 'Lex Luthor')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "LEX Corp";
        $ad->service = "Fencing";
        $ad->quote = 0;
        $ad->body = "Making a better world";
        $ad->user_id = User::where('name', 'Lex Luthor')->value('id');
        $ad->location = "South Bank, 3006";
        $ad->phone = "0400000012";
        $ad->email = User::where('name', 'Lex Luthor')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "LEX Corp";
        $ad->service = "Drains";
        $ad->quote = 0;
        $ad->body = "Making a better world";
        $ad->user_id = User::where('name', 'Lex Luthor')->value('id');
        $ad->location = "South Bank, 3006";
        $ad->phone = "0400000012";
        $ad->email = User::where('name', 'Lex Luthor')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "LEX Corp";
        $ad->service = "Concreting";
        $ad->quote = 0;
        $ad->body = "Making a better world";
        $ad->user_id = User::where('name', 'Lex Luthor')->value('id');
        $ad->location = "South Bank, 3006";
        $ad->phone = "0400000012";
        $ad->email = User::where('name', 'Lex Luthor')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "LEX Corp";
        $ad->service = "Carpenters";
        $ad->quote = 0;
        $ad->body = "Making a better world";
        $ad->user_id = User::where('name', 'Lex Luthor')->value('id');
        $ad->location = "South Bank, 3006";
        $ad->phone = "0400000012";
        $ad->email = User::where('name', 'Lex Luthor')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "LEX Corp";
        $ad->service = "Builders";
        $ad->quote = 0;
        $ad->body = "Makign a better world";
        $ad->user_id = User::where('name', 'Lex Luthor')->value('id');
        $ad->location = "South Bank, 3006";
        $ad->phone = "0400000012";
        $ad->email = User::where('name', 'Lex Luthor')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "LEX Corp";
        $ad->service = "Bricklayers";
        $ad->quote = 0;
        $ad->body = "Makign a better world";
        $ad->user_id = User::where('name', 'Lex Luthor')->value('id');
        $ad->location = "South Bank, 3006";
        $ad->phone = "0400000012";
        $ad->email = User::where('name', 'Lex Luthor')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "LEX Corp";
        $ad->service = "Windows";
        $ad->quote = 0;
        $ad->body = "Makign a better world";
        $ad->user_id = User::where('name', 'Lex Luthor')->value('id');
        $ad->location = "South Bank, 3006";
        $ad->phone = "0400000012";
        $ad->email = User::where('name', 'Lex Luthor')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "LEX Corp";
        $ad->service = "Heating";
        $ad->quote = 0;
        $ad->body = "Makign a better world";
        $ad->user_id = User::where('name', 'Lex Luthor')->value('id');
        $ad->location = "South Bank, 3006";
        $ad->phone = "0400000012";
        $ad->email = User::where('name', 'Lex Luthor')->value('email');
        $ad->max_dist = "30";
        $ad->save();

        $ad = new Advertisement();
        $ad->name = "LEX Corp";
        $ad->service = "Roofing";
        $ad->quote = 0;
        $ad->body = "Makign a better world";
        $ad->user_id = User::where('name', 'Lex Luthor')->value('id');
        $ad->location = "South Bank, 3006";
        $ad->phone = "0400000012";
        $ad->email = User::where('name', 'Lex Luthor')->value('email');
        $ad->max_dist = "30";
        $ad->save();

    }
}
