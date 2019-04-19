<?php

use Illuminate\Database\Seeder;

class TimeUnitTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('time_unit_type')->insert(
            [
                [            'id' => 1, 'time_unit_text' => 'Second(s)' ],
                [            'id' => 2, 'time_unit_text' => 'Minute(s)' ],
                [            'id' => 3, 'time_unit_text' => 'Hour(s)' ],
                [            'id' => 4, 'time_unit_text' => 'Day(s)' ],
                [            'id' => 5, 'time_unit_text' => 'Week(s)' ],
                [            'id' => 6, 'time_unit_text' => 'Month(s)' ],
                [            'id' => 6, 'time_unit_text' => 'Year(s)' ]
        ]);

        // DB::table('recipe_types')->insert([
        //     'id' => Str::random(10).'@gmail.com',
        //     'name' => Str::random(10),
        //     'long_name' => bcrypt('secret'),
        // ]);
    }
}
/* 
difficulty_level
    - Kid Friendly
    - Dad Easy 
    = Moms Alley 
    - Junior Chef
    - Master Chef 

recipe_life_unit_type
    - Month
    - Weeks
    - Days
    - Hours
    - Minutes
    - Seconds

allergen_type
    - Nuts
    - Shellfish
    - Pork
    - Wheat
    - Dairy
    - Eggs */

