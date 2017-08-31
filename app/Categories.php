<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    //primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
