<?php

namespace Database\Seeders;

use App\Models\Country;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    const COUNTRIES = [
        ['id' => 1, 'name' => 'Brasil', 'currency_id' => 2],
        ['id' => 2, 'name' => 'Portugal', 'currency_id' => 1]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::COUNTRIES as $country) {
            Country::create($country);
        }
    }
}
