<?php

use Illuminate\Database\Seeder;

class SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seasons')->insert(
        [[            'id' => 1, 'name' => 'Christmas', 'long_name' => 'Christmas', ],
        [            'id' => 2, 'name' => 'Thanksgiving', 'long_name' => 'Thanksgiving', ],
        [            'id' => 3, 'name' => 'Grilling', 'long_name' => 'Grilling', ],
        [            'id' => 4, 'name' => 'Cold/Flu', 'long_name' => 'Cold/Flu', ],
        [            'id' => 5, 'name' => 'Diet', 'long_name' => 'Diet', ],
        [            'id' => 6, 'name' => 'Birthday', 'long_name' => 'Birthday', ]
        ]);

        // DB::table('recipe_types')->insert([
        //     'id' => Str::random(10).'@gmail.com',
        //     'name' => Str::random(10),
        //     'long_name' => bcrypt('secret'),
        // ]);
    }
}
/* 
spicy_level
    - Non Spicey
    - Very Mild
    - Mild
    - Medium
    - Hot
    - Crazy Hot
likeability
    - Plead the 5th
    - Pretty Decent
    - Its a Keeper
    - Cant getnuff
    - Can I marry it?

preparation_time_unit_type
    - Forever
    - Month
    - Weeks
    - Days
    - Hours
    - Minutes
    - Seconds
cooking_time_unit_type
    - Month
    - Weeks
    - Days
    - Hours
    - Minutes
    - Seconds 
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

