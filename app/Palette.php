<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palette extends Model
{
    protected $table = 'palette';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    // Current website palette
    private $currentPalette = 'currentpalette';
}
