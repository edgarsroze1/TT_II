<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Fish',
            'description' => 'Fish Fish',
        ]);
        DB::table('categories')->insert([
            'name' => 'Vegetables',
            'description' => 'Vegetables Vegetables',
        ]);
        DB::table('categories')->insert([
            'name' => 'Meat',
            'description' => 'Meat Meat',
        ]);
        DB::table('categories')->insert([
            'name' => 'Sweets',
            'description' => 'Sweets Sweets',
        ]);
    }
}
