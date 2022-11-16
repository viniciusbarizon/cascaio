<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            ['id' => 1, 'currency' => 'Euro', 'currency_symbol_id' => 1],
            ['id' => 2, 'currency' => 'Real', 'currency_symbol_id' => 2],
        ]);
    }
}
