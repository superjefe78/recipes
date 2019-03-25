<?php

use Illuminate\Database\Seeder;

class LikeabilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likeability')->insert(
        [[            'id' => 1, 'name' => 'I Plead the 5th', 'long_name' => 'I Plead the 5th', ],
        [            'id' => 2, 'name' => 'Decently OK', 'long_name' => 'Decently OK', ],
        [            'id' => 3, 'name' => 'Its a Keeper', 'long_name' => 'Its a Keeper', ],
        [            'id' => 4, 'name' => 'Cant get nuff', 'long_name' => 'Cant get nuff', ],
        [            'id' => 5, 'name' => 'Can I marry it?', 'long_name' => 'Can I marry it?', ],
        [            'id' => 6, 'name' => 'Crazy Hot', 'long_name' => 'Crazy Hot', ]
        ]);
    }
}
/* 
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
