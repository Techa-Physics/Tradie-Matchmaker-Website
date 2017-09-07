<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Advertisement;

class Review extends Model
{
    protected $table = 'reviews';
    //primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function advertisement()
    {
        return $this->belongsTo('App\Advertisement');
    }
}
