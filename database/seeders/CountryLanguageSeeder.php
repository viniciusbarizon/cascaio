<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country_language')->insert([
            ['country_id' => 1, 'language_id' => 1],
            ['country_id' => 2, 'language_id' => 1],
        ]);
    }
}
