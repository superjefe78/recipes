<?php

use Illuminate\Database\Seeder;

class AllergenTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allergen_type')->insert(
        [[            'id' => 1, 'name' => 'Nuts', 'long_name' => 'Nuts', ],
        [            'id' => 2, 'name' => 'Shellfish', 'long_name' => 'Shellfish', ],
        [            'id' => 3, 'name' => 'Pork', 'long_name' => 'Pork', ],
        [            'id' => 4, 'name' => 'Wheat', 'long_name' => 'Wheat', ],
        [            'id' => 5, 'name' => 'Dairy', 'long_name' => 'Dairy', ],
        [            'id' => 6, 'name' => 'Eggs', 'long_name' => 'Eggs', ]
        ]);
    }
}
