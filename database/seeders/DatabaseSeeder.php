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
            LanguageSeeder::class,
            CurrencySymbolSeeder::class,
            CurrencySeeder::class,
            CountrySeeder::class,
            ExpenseCommonSeeder::class,
            CountryExpenseCommonSeeder::class,
            CountryLanguageSeeder::class
        ]);
    }
}
