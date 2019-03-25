<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Log::info('before');
        $this->call(AllergenTypeTableSeeder::class);
        $this->call(DifficultyLevelTableSeeder::class);
        $this->call(LikeabilityTableSeeder::class);
        $this->call(MealTypeTableSeeder::class);
        $this->call(RecipeTypesTableSeeder::class);
        $this->call(SeasonTableSeeder::class);
        $this->call(SpicyLevelTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        Log::info('after');
    }
}
