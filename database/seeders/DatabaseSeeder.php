<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CurrencySymbolSeeder::class,
            CurrencySeeder::class,
            CountrySeeder::class,
            LanguageSeeder::class,
            CountryLanguageSeeder::class,
            CategorySeeder::class,
            CountryExpenseCommonSeeder::class
        ]);
    }
}
