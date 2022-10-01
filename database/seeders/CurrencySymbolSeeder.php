<?php

namespace Database\Seeders;

use App\Models\CurrencySymbol;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySymbolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CurrencySymbol::create(
            [
                'id' => 1,
                'symbol' => '€'
            ],

            [
                'id' => 2,
                'symbol' => 'R$'
            ]
        );
    }
}
