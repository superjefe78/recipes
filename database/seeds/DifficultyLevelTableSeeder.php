<?php

use Illuminate\Database\Seeder;

class DifficultyLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('difficulty_level')->insert(
        [[            'id' => 1, 'name' => 'Easy', 'long_name' => 'Kid Friendly', ],
        [            'id' => 2, 'name' => 'Simple', 'long_name' => 'Dad Easy', ],
        [            'id' => 3, 'name' => 'Regular', 'long_name' => 'Moms Alley', ],
        [            'id' => 4, 'name' => 'Complicated', 'long_name' => 'Junior Chef', ],
        [            'id' => 5, 'name' => 'Hard', 'long_name' => 'Master Chef', ]
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

