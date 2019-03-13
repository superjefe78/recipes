<?php

use Illuminate\Database\Seeder;

class RecipeTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_types')->insert(
        [
            'id' => 1,
            'name' => '',
            'long_name' => '',
        ],
        [
            'id' => 2,
            'name' => '',
            'long_name' => '',
        ]
        );

        // DB::table('recipe_types')->insert([
        //     'id' => Str::random(10).'@gmail.com',
        //     'name' => Str::random(10),
        //     'long_name' => bcrypt('secret'),
        // ]);
    }
}
/* 
recipe_type
    - Latin/Hispanic
    - Mexican
    - Italian
    - 

meal_type
    - Breakfast
    - Brunch
    - Lunch
    - Dinner

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