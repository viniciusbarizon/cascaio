<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryDefaultCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_default_country')->insert([
            ['country_id' => 2, 'category_default_id' => 1],
            ['country_id' => 2, 'category_default_id' => 2],
            ['country_id' => 2, 'category_default_id' => 3],
            ['country_id' => 2, 'category_default_id' => 4],
            ['country_id' => 2, 'category_default_id' => 5],
            ['country_id' => 2, 'category_default_id' => 6],
            ['country_id' => 2, 'category_default_id' => 7],
            ['country_id' => 2, 'category_default_id' => 8],
            ['country_id' => 2, 'category_default_id' => 9],
            ['country_id' => 2, 'category_default_id' => 10],
            ['country_id' => 2, 'category_default_id' => 11],
            ['country_id' => 2, 'category_default_id' => 12],
            ['country_id' => 2, 'category_default_id' => 13],
            ['country_id' => 2, 'category_default_id' => 14],
            ['country_id' => 2, 'category_default_id' => 15],
            ['country_id' => 2, 'category_default_id' => 16],
            ['country_id' => 2, 'category_default_id' => 17],
            ['country_id' => 2, 'category_default_id' => 18],
            ['country_id' => 2, 'category_default_id' => 19],
            ['country_id' => 2, 'category_default_id' => 20],
            ['country_id' => 2, 'category_default_id' => 21],
            ['country_id' => 2, 'category_default_id' => 22],
            ['country_id' => 2, 'category_default_id' => 23],
            ['country_id' => 2, 'category_default_id' => 24],
            ['country_id' => 2, 'category_default_id' => 25],
            ['country_id' => 2, 'category_default_id' => 26],
            ['country_id' => 2, 'category_default_id' => 27],
            ['country_id' => 2, 'category_default_id' => 28]
        ]);
    }
}
