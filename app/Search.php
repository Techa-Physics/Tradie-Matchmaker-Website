<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $table = 'searches';
    //primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
