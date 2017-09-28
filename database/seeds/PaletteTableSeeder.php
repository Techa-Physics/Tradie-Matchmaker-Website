<?php

use Illuminate\Database\Seeder;
use App\Palette;

class PaletteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $palette = new Palette();
        $palette->currentPalette = '1';
        $palette->save();
    }
}
