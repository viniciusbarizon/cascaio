<?php

namespace Database\Seeders;

use App\Models\Currency;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create([
            'id' => 1,
            'currency' => 'Euro',
            'currency_symbol_id' => 1
        ]);

        Currency::create([
            'id' => 2,
            'currency' => 'Real',
            'currency_symbol_id' => 2
        ]);
    }
}
