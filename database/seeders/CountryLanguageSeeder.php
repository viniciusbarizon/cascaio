<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountryLanguageSeeder extends Seeder
{
    const COUNTRY_LANGUAGES = [
        ['country_id' => 1, 'language_id' => 1],
        ['country_id' => 2, 'language_id' => 1]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::COUNTRY_LANGUAGES as $countryLanguage) {
            Country::create($countryLanguage);
        }
    }
}
