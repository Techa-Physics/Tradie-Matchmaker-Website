<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}