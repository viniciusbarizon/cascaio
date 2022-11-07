<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['id' => 1, 'name' => 'Brasil', 'currency_id' => 2],
            ['id' => 2, 'name' => 'Portugal', 'currency_id' => 1]
        ]);
    }
}
