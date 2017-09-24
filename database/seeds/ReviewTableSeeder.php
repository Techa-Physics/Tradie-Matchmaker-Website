<?php

use Illuminate\Database\Seeder;
use App\Review;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        $review = new Review();
        $review->name = "Fast, Good service";
        $review->rating = 4;
        $review->description ="I was very pleased in how fast they 
        installed the system, and thye arrived right on time when they said they will come.";
        $review->ad_id = 1;
        $review->save();
        // 2
        $review = new Review();
        $review->name = "Little bit pricey";
        $review->rating = 3;
        $review->description ="Was good service, but cost a little too much.";
        $review->ad_id = 1;
        $review->save();
        // 3
        $review = new Review();
        $review->name = "Average service";
        $review->rating = 3;
        $review->description ="They were okay, nothing that special, were fast, but cost a bit.";
        $review->ad_id = 1;
        $review->save();
        // 4
        $review = new Review();
        $review->name = "Fantastic workers, Amazing service";
        $review->rating = 5;
        $review->description ="They were very helpful and completed their work very fast. 
                                I'm surprised they didn't charge that much.";
        $review->ad_id = 2;
        $review->save();
        // 5
        $review = new Review();
        $review->name = "Quality work";
        $review->rating = 4;
        $review->description ="After a big storm my drains were damanged, I called them the next day, 
                                and they came that day and fixed it. Was very good quality work.";
        $review->ad_id = 3;
        $review->save();
        // 6
        $review = new Review();
        $review->name = "Poor service";
        $review->rating = 1;
        $review->description ="The work they did was terrible, they left rubbish around my yard. Was not happy.
                                Deffinately do not recommend";
        $review->ad_id = 3;
        $review->save();
        // 7
        $review = new Review();
        $review->name = "They were alright";
        $review->rating = 3;
        $review->description ="They did average work, thats about it";
        $review->ad_id = 3;
        $review->save();
        // 8
        $review = new Review();
        $review->name = "Excelent work";
        $review->rating = 4;
        $review->description ="THey did a very good job on my new fence. Quick and resonable price as well. Very happy.";
        $review->ad_id = 4;
        $review->save();
        // 9
        $review = new Review();
        $review->name = "Very good work";
        $review->rating = 4;
        $review->description ="Love my new fence, they done a very good job. Highly recommend this business 
                                to anyone who needs a new fence.";
        $review->ad_id = 4;
        $review->save();
        // 10
        $review = new Review();
        $review->name = "Ehhh not that good";
        $review->rating = 2;
        $review->description ="Was kinda dissapointed with the result";
        $review->ad_id = 5;
        $review->save();
        // 11
        $review = new Review();
        $review->name = "Was alright";
        $review->rating = 3;
        $review->description ="Got what you paid for";
        $review->ad_id = 5;
        $review->save();
        // 12
        $review = new Review();
        $review->name = "Was dissapointed";
        $review->rating = 2;
        $review->description ="Doesn't look good";
        $review->ad_id = 5;
        $review->save();
        // 13
        $review = new Review();
        $review->name = "Best thing ever";
        $review->rating = 5;
        $review->description ="So good, so warm";
        $review->ad_id = 6;
        $review->save();
        // 14
        $review = new Review();
        $review->name = "Amazing";
        $review->rating = 4;
        $review->description ="I deffs reconmend, every house needs this for winter";
        $review->ad_id = 6;
        $review->save();
        // 15
        $review = new Review();
        $review->name = "Very good, but costly";
        $review->rating = 4;
        $review->description ="Love it, byt cost a bit to get it";
        $review->ad_id = 6;
        $review->save();
        // 16
        $review = new Review();
        $review->name = "Cost way to much";
        $review->rating = 2;
        $review->description ="Way over priced for the work they did";
        $review->ad_id = 7;
        $review->save();
        // 17
        $review = new Review();
        $review->name = "Expensive";
        $review->rating = 2;
        $review->description ="Over priced, do not recommend";
        $review->ad_id = 7;
        $review->save();
        // 18
        $review = new Review();
        $review->name = "Average work";
        $review->rating = 3;
        $review->description ="Work was average for the price of it";
        $review->ad_id = 7;
        $review->save();
        // 19
        $review = new Review();
        $review->name = "Love it";
        $review->rating = 5;
        $review->description =" ";
        $review->ad_id = 8;
        $review->save();
        // 20
        $review = new Review();
        $review->name = "Very good";
        $review->rating = 4;
        $review->description =" ";
        $review->ad_id = 8;
        $review->save();
        // 21
        $review = new Review();
        $review->name = "Was good";
        $review->rating = 4;
        $review->description =" ";
        $review->ad_id = 9;
        $review->save();
        // 22
        $review = new Review();
        $review->name = "Lovely work";
        $review->rating = 4;
        $review->description =" ";
        $review->ad_id = 9;
        $review->save();
        // 23
        $review = new Review();
        $review->name = "Cost too much";
        $review->rating = 3;
        $review->description =" COST TO MUCH MAN";
        $review->ad_id = 10;
        $review->save();
        // 24
        $review = new Review();
        $review->name = "EHHHHH, thats all";
        $review->rating = 2;
        $review->description =" ";
        $review->ad_id = 10;
        $review->save();
        // 25
        $review = new Review();
        $review->name = "nearly perfect";
        $review->rating = 4;
        $review->description =" ";
        $review->ad_id = 10;
        $review->save();
        // 26
        $review = new Review();
        $review->name = "Below average";
        $review->rating = 2;
        $review->description =" ";
        $review->ad_id = 11;
        $review->save();
        // 27
        $review = new Review();
        $review->name = "Perfect";
        $review->rating = 5;
        $review->description =" ";
        $review->ad_id = 11;
        $review->save();
        // 28
        $review = new Review();
        $review->name = "Above average";
        $review->rating = 3;
        $review->description ="deffs recommend";
        $review->ad_id = 11;
        $review->save();
        // 29
        $review = new Review();
        $review->name = "Below average";
        $review->rating = 2;
        $review->description =" no positive to say";
        $review->ad_id = 12;
        $review->save();
        // 30
        $review = new Review();
        $review->name = "Average";
        $review->rating =3 ;
        $review->description ="";
        $review->ad_id = 12;
        $review->save();
        // 31
        $review = new Review();
        $review->name = "Was okay";
        $review->rating = 3;
        $review->description ="Service was poor";
        $review->ad_id = 12;
        $review->save();
        // 32
        $review = new Review();
        $review->name = "Friendly workers";
        $review->rating = 4;
        $review->description =" ";
        $review->ad_id = 13;
        $review->save();
        // 33
        $review = new Review();
        $review->name = "Quality stuff";
        $review->rating = 4;
        $review->description =" ";
        $review->ad_id = 13;
        $review->save();
        // 34
        $review = new Review();
        $review->name = "Best in hte west";
        $review->rating = 5;
        $review->description ="Love the new foot path on the side of my house";
        $review->ad_id = 13;
        $review->save();
        // 35
        $review = new Review();
        $review->name = "Not the best finish";
        $review->rating = 3;
        $review->description ="Was a hot day, the finish was a bit poor cause concrete dried to fast,
                                should be better to deal with that stuff";
        $review->ad_id = 14;
        $review->save();
        // 36
        $review = new Review();
        $review->name = "Love my new driveway";
        $review->rating = 4;
        $review->description =" ";
        $review->ad_id = 14;
        $review->save();
        // 37
        $review = new Review();
        $review->name = "Very pleased";
        $review->rating = 4;
        $review->description =" ";
        $review->ad_id = 14;
        $review->save();
        // 38
        $review = new Review();
        $review->name = "Above Average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 15;
        $review->save();
        // 39
        $review = new Review();
        $review->name = "Average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 15;
        $review->save();
        // 40
        $review = new Review();
        $review->name = "Value for price";
        $review->rating = 5;
        $review->description ="Lvoe the work that was done";
        $review->ad_id = 16;
        $review->save();
        // 41
        $review = new Review();
        $review->name = "Very very dissappointed";
        $review->rating = 1;
        $review->description ="Horrible work they did";
        $review->ad_id = 16;
        $review->save();
        // 42
        $review = new Review();
        $review->name = "Terrible customer service";
        $review->rating = 2;
        $review->description ="Not to happy with the workers and there attitude";
        $review->ad_id = 16;
        $review->save();
        // 43
        $review = new Review();
        $review->name = "Average work";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 17;
        $review->save();
        // 44
        $review = new Review();
        $review->name = "Took to long";
        $review->rating = 3;
        $review->description ="Need to be able to work faster";
        $review->ad_id = 17;
        $review->save();
        // 45
        $review = new Review();
        $review->name = "Good work";
        $review->rating = 4;
        $review->description ="Very decent work they did";
        $review->ad_id = 17;
        $review->save();
        // 46
        $review = new Review();
        $review->name = "Very good work";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 18;
        $review->save();
        // 47
        $review = new Review();
        $review->name = "Quility work";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 18;
        $review->save();
        // 48
        $review = new Review();
        $review->name = "Very good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 18;
        $review->save();
        // 49
        $review = new Review();
        $review->name = "Vey nice";
        $review->rating = 4;
        $review->description ="loved there work";
        $review->ad_id = 19;
        $review->save();
        // 50
        $review = new Review();
        $review->name = "Average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 20;
        $review->save();
        // 51
        $review = new Review();
        $review->name = "Average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 21;
        $review->save();
        // 52
        $review = new Review();
        $review->name = "Very Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 22;
        $review->save();
        // 53
        $review = new Review();
        $review->name = "Quality stuff";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 23;
        $review->save();
        // 54
        $review = new Review();
        $review->name = "Will hire again";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 24;
        $review->save();
        // 55
        $review = new Review();
        $review->name = "Average work";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 25;
        $review->save();
        // 56
        $review = new Review();
        $review->name = "Good work";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 26;
        $review->save();
        // 57
        $review = new Review();
        $review->name = "Good work, unfriendly workers";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 27;
        $review->save();
        // 58
        $review = new Review();
        $review->name = "Very good job";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 28;
        $review->save();
        // 59
        $review = new Review();
        $review->name = "Quality work";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 29;
        $review->save();
        // 60
        $review = new Review();
        $review->name = "Impressive work";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 30;
        $review->save();
        // 61
        $review = new Review();
        $review->name = "Average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 31;
        $review->save();
        // 62
        $review = new Review();
        $review->name = "Terrible";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 32;
        $review->save();
        // 63
        $review = new Review();
        $review->name = "Poor workers";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 33;
        $review->save();
        // 64
        $review = new Review();
        $review->name = "Average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 34;
        $review->save();
        // 65
        $review = new Review();
        $review->name = "Very good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 35;
        $review->save();
        // 66
        $review = new Review();
        $review->name = "Perfect";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 36;
        $review->save();
        // 67
        $review = new Review();
        $review->name = "Lvoely workers and word";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 37;
        $review->save();
        // 68
        $review = new Review();
        $review->name = "was alright";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 38;
        $review->save();
        // 69
        $review = new Review();
        $review->name = "quite above average";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 39;
        $review->save();
        // 70
        $review = new Review();
        $review->name = "solid stuff";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 40;
        $review->save();
        // 71
        $review = new Review();
        $review->name = "was decent";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 41;
        $review->save();
        // 72
        $review = new Review();
        $review->name = "Yeah, not bad";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 42;
        $review->save();
        // 73
        $review = new Review();
        $review->name = "Friendly staff";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 43;
        $review->save();
        // 74
        $review = new Review();
        $review->name = "Decent work";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 44;
        $review->save();
        // 75
        $review = new Review();
        $review->name = "Good price";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 45;
        $review->save();
        // 76
        $review = new Review();
        $review->name = "Quality work";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 46;
        $review->save();
        // 77
        $review = new Review();
        $review->name = "Disgraceful work";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 47;
        $review->save();
        // 78
        $review = new Review();
        $review->name = "Was very good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 48;
        $review->save();
        // 79
        $review = new Review();
        $review->name = "Love the work they did";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 49;
        $review->save();
        // 80
        $review = new Review();
        $review->name = "Not bad work, but price was cheap";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 50;
        $review->save();
        // 81
        $review = new Review();
        $review->name = "Very good work they did";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 51;
        $review->save();
        // 82
        $review = new Review();
        $review->name = "Work was alright, so was the price";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 52;
        $review->save();
        // 83
        $review = new Review();
        $review->name = "Excelent service";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 53;
        $review->save();
        // 84
        $review = new Review();
        $review->name = "Decent price";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 54;
        $review->save();
        // 85
        $review = new Review();
        $review->name = "Was decent";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 55;
        $review->save();
        // 86
        $review = new Review();
        $review->name = "Good price";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 56;
        $review->save();
        // 87
        $review = new Review();
        $review->name = "The work was good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 57;
        $review->save();
        // 88
        $review = new Review();
        $review->name = "Disappointing";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 58;
        $review->save();
        // 89
        $review = new Review();
        $review->name = "Aveage price and work";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 59;
        $review->save();
        // 90
        $review = new Review();
        $review->name = "Pirce was to high";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 60;
        $review->save();
        // 91
        $review = new Review();
        $review->name = "Average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 61;
        $review->save();
        // 92
        $review = new Review();
        $review->name = "Was decent";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 62;
        $review->save();
        // 93
        $review = new Review();
        $review->name = "Very good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 63;
        $review->save();
        // 94
        $review = new Review();
        $review->name = "Very good work";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 64;
        $review->save();
        // 95
        $review = new Review();
        $review->name = "Was decent";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 65;
        $review->save();
        // 96
        $review = new Review();
        $review->name = "Highly recommend";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 66;
        $review->save();
        // 97
        $review = new Review();
        $review->name = "above average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 67;
        $review->save();
        // 98
        $review = new Review();
        $review->name = "Very good workers and high quality work";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 68;
        $review->save();
        // 99
        $review = new Review();
        $review->name = "DO NOT RECOMMEND, WORST BUSINESS EVER";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 69;
        $review->save();
        // 100
        $review = new Review();
        $review->name = "Awesome job they did";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 70;
        $review->save();
        // 101
        $review = new Review();
        $review->name = "Very average work, but good price";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 71;
        $review->save();
        // 102
        $review = new Review();
        $review->name = "Decent work";
        $review->rating =3;
        $review->description ="";
        $review->ad_id = 72;
        $review->save();
        // 103
        $review = new Review();
        $review->name = "Loved the work they did";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 73;
        $review->save();
        // 104
        $review = new Review();
        $review->name = "Reasonably priced";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 74;
        $review->save();
        // 105
        $review = new Review();
        $review->name = "Very good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 75;
        $review->save();
        // 106
        $review = new Review();
        $review->name = "Above average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 76;
        $review->save();
        // 107
        $review = new Review();
        $review->name = "Very good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 77;
        $review->save();
        // 108
        $review = new Review();
        $review->name = "Very good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 78;
        $review->save();
        // 109
        $review = new Review();
        $review->name = "Awesome work";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 79;
        $review->save();
        // 110
        $review = new Review();
        $review->name = "Perfection";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 80;
        $review->save();
        // 111
        $review = new Review();
        $review->name = "Very good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 81;
        $review->save();
        // 112
        $review = new Review();
        $review->name = "Very good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 82;
        $review->save();
        // 113
        $review = new Review();
        $review->name = "Very good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 83;
        $review->save();
        // 114
        $review = new Review();
        $review->name = "Very good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 84;
        $review->save();
        // 115
        $review = new Review();
        $review->name = "Above average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 85;
        $review->save();
        // 116
        $review = new Review();
        $review->name = "Above average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 86;
        $review->save();
        // 117
        $review = new Review();
        $review->name = "Above average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 87;
        $review->save();
        // 118
        $review = new Review();
        $review->name = "Above average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 88;
        $review->save();
        // 119
        $review = new Review();
        $review->name = "Below average";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 89;
        $review->save();
        // 120
        $review = new Review();
        $review->name = "Below average";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 90;
        $review->save();
        // 121
        $review = new Review();
        $review->name = "Below average";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 91;
        $review->save();
        // 122
        $review = new Review();
        $review->name = "Very good work";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 92;
        $review->save();
        // 123
        $review = new Review();
        $review->name = "Good price for good work";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 93;
        $review->save();
        // 124
        $review = new Review();
        $review->name = "Amazing job";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 94;
        $review->save();
        // 125
        $review = new Review();
        $review->name = "Loved the work";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 95;
        $review->save();
        // 126
        $review = new Review();
        $review->name = "Highly decent";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 96;
        $review->save();
        // 127
        $review = new Review();
        $review->name = "Above average";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 97;
        $review->save();

        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 98;
        $review->save();

        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 99;
        $review->save();

        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 100;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 101;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 102;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 103;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 104;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 105;
        $review->save();

        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 106;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 107;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 108;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 109;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 110;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 111;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 112;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 113;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 114;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 115;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 116;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 117;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 118;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 119;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 120;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 121;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 122;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 123;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 124;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 125;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 126;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 127;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 128;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 129;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 130;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 131;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 132;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 133;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 134;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 135;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 136;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 137;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 138;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 139;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 140;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 141;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 142;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 143;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 144;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 145;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 146;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 147;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 148;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 149;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 150;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 151;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 152;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 153;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 154;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 155;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 156;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 157;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 158;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 159;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 160;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 161;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 162;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 163;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 164;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 165;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 166;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 167;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 168;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 169;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 170;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 171;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 172;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 173;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 174;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 175;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 176;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 177;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 178;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 179;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 180;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 181;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 182;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 183;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 184;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 185;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 186;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 187;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 188;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 189;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 190;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 191;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 192;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 193;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 194;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 195;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 196;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 197;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 198;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 199;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 200;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 201;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 202;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 203;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 204;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 205;
        $review->save();

        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 206;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 207;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 208;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 209;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 210;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 211;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 212;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 213;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 214;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 215;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 216;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 217;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 218;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 219;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 220;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 221;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 222;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 223;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 224;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 225;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 226;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 227;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 228;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 229;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 230;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 231;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 232;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 233;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 234;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 235;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 236;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 237;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 238;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 239;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 240;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 241;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 242;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 243;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 244;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 245;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 246;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 247;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 248;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 249;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 250;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 251;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 252;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 253;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 254;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 255;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 256;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 257;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 258;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 259;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 260;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 261;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 262;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 263;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 264;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 265;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 266;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 267;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 268;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 269;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 270;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 271;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 272;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 273;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 274;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 275;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 276;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 277;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 278;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 279;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 280;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 281;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 282;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 283;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 284;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 285;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 286;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 287;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 288;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 289;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 290;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 291;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 292;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 293;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 294;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 295;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 296;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 297;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 298;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 299;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 300;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 301;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 302;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 303;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 304;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 305;
        $review->save();

        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 306;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 307;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 308;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 309;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 310;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 311;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 312;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 313;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 314;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 315;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 316;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 317;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 318;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 319;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 320;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 321;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 322;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 323;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 324;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 325;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 326;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 327;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 328;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 329;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 330;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 331;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 332;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 333;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 334;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 335;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 336;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 337;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 338;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 339;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 340;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 341;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 342;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 343;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 344;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 345;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 346;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 347;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 348;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 349;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 350;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 351;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 352;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 353;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 354;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 355;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 356;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 357;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 358;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 359;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 360;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 361;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 362;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 363;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 364;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 365;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 366;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 367;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 368;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 369;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 370;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 371;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 372;
        $review->save();

        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 373;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 374;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 375;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 376;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 377;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 378;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 379;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 380;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 381;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 382;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 383;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 384;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 385;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 386;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 387;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 388;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 389;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 390;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 391;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 392;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 393;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 394;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 395;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 396;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 397;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 398;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 399;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 400;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 401;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 402;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 403;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 404;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 405;
        $review->save();

        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 406;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 407;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 408;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 409;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 410;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 411;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 412;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 413;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 414;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 415;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 416;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 417;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 418;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 419;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 420;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 421;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 422;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 423;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 424;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 425;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 426;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 427;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 428;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 429;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 430;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 431;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 432;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 433;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 434;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 435;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 436;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 437;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 438;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 439;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 440;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 441;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 442;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 443;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 444;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 445;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 446;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 447;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 448;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 449;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 450;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 451;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 452;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 453;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 454;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 455;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 456;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 457;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 458;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 459;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 460;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 461;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 462;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 463;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 1;
        $review->description ="";
        $review->ad_id = 464;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 465;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 466;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 467;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 5;
        $review->description ="";
        $review->ad_id = 468;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 4;
        $review->description ="";
        $review->ad_id = 469;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 470;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 471;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 472;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 373;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 474;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 2;
        $review->description ="";
        $review->ad_id = 375;
        $review->save();
        
        $review = new Review();
        $review->name = "Good";
        $review->rating = 3;
        $review->description ="";
        $review->ad_id = 476;
        $review->save();
    }
}
