<?php

use Illuminate\Database\Seeder;

class SpicyLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spicy_level')->insert(
        [[            'id' => 1, 'name' => 'Non Spicy', 'long_name' => 'Non Spicy', ],
        [            'id' => 2, 'name' => 'Very Mild', 'long_name' => 'Very Mild', ],
        [            'id' => 3, 'name' => 'Mild', 'long_name' => 'Mild', ],
        [            'id' => 4, 'name' => 'Medium', 'long_name' => 'Medium', ],
        [            'id' => 5, 'name' => 'Hot', 'long_name' => 'Hot', ],
        [            'id' => 6, 'name' => 'Crazy Hot', 'long_name' => 'Crazy Hot', ]
        ]);
    }
}
/* 
likeability
    - I Plead the 5th
    - Decently OK
    - Its a Keeper
    - Cant get'nuff
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
