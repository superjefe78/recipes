<?php

use Illuminate\Database\Seeder;

class MealTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meal_type')->insert(
        [[            'id' => 1, 'name' => 'Breakfast', 'long_name' => 'Breakfast', ],
        [            'id' => 2, 'name' => 'Brunch', 'long_name' => 'Brunch', ],
        [            'id' => 3, 'name' => 'Lunch', 'long_name' => 'Lunch', ],
        [            'id' => 4, 'name' => 'Dinner', 'long_name' => 'Dinner', ]
        ]);

        // DB::table('recipe_types')->insert([
        //     'id' => Str::random(10).'@gmail.com',
        //     'name' => Str::random(10),
        //     'long_name' => bcrypt('secret'),
        // ]);
    }
}
/* 

season
    - Christmas
    - Thanksgiving
    - Grilling
    - Cold/Flu
    - Diet
    - Birthday

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

