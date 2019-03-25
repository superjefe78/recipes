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
        DB::table('recipe_types')->insert([
        [            'id' => 1,  'name' => 'Latin/Hispanic', 'long_name' => 'Latin/Hispanic' ],
        [            'id' => 2,  'name' => 'Mexican', 'long_name' => 'Mexican' ],
        [            'id' => 3,  'name' => 'Italian', 'long_name' => 'Italian' ],
        [            'id' => 4,  'name' => 'Family Recipe', 'long_name' => 'Family Recipe' ],
        [            'id' => 5,  'name' => 'Holiday', 'long_name' => 'Holiday'],
        [            'id' => 6,  'name' => 'Pasta', 'long_name' => 'Pasta' ],
        [            'id' => 7,  'name' => 'Salad', 'long_name' => 'Salad' ],
        [            'id' => 8,  'name' => 'Bread', 'long_name' => 'Bread' ],
        [            'id' => 9,  'name' => 'Vegetable', 'long_name' => 'Vegetable' ],
        [            'id' => 10, 'name' => 'Soup', 'long_name' => 'Soup'],
        [            'id' => 11, 'name' => 'Roast', 'long_name' => 'Roast' ]
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
    - Family Recipe
    - Holiday
    - Pasta
    - Salad
    - Bread
    - Vegetable
    - Soup
    - Roast
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