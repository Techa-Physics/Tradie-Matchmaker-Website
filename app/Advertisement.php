<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Review;

class Advertisement extends Model
{
    //table name
    protected $table = 'advertisements';
    //primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function getUserName($ad_user_id)
    {
        $name = DB::table('users')->where('id', $ad_user_id)->first()->name();
        return $name; 
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function getRating($id)
    {
        $rating = Review::where('ad_id',$id)->avg('rating');
        return $rating;
    }
}