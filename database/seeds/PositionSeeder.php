<?php

use Illuminate\Database\Seeder;
use App\Position;

class PositionSeeder extends Seeder
{
    public function run()
    {
    	DB::statement("SET FOREIGN_KEY_CHECKS=0");
        Position::truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS=1");

        Position::create(['title' => 'Managing Director']);
        Position::create(['title' => 'Operations Manager']);
        Position::create(['title' => 'Account Officer']);
        Position::create(['title' => 'General Manager']);
    }
}
