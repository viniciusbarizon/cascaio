<?php

namespace Database\Seeders;

use App\Models\CountryExpensec;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountryExpenseCommonSeeder extends Seeder
{
    const COUNTRY_EXPENSE_COMMONS = [
        ['country_id' => 2, 'expense_common_id' => 1],
        ['country_id' => 2, 'expense_common_id' => 2],
        ['country_id' => 2, 'expense_common_id' => 3],
        ['country_id' => 2, 'expense_common_id' => 4],
        ['country_id' => 2, 'expense_common_id' => 5],
        ['country_id' => 2, 'expense_common_id' => 6],
        ['country_id' => 2, 'expense_common_id' => 7],
        ['country_id' => 2, 'expense_common_id' => 8],
        ['country_id' => 2, 'expense_common_id' => 9],
        ['country_id' => 2, 'expense_common_id' => 10],
        ['country_id' => 2, 'expense_common_id' => 11],
        ['country_id' => 2, 'expense_common_id' => 12],
        ['country_id' => 2, 'expense_common_id' => 13],
        ['country_id' => 2, 'expense_common_id' => 14],
        ['country_id' => 2, 'expense_common_id' => 15],
        ['country_id' => 2, 'expense_common_id' => 16],
        ['country_id' => 2, 'expense_common_id' => 17],
        ['country_id' => 2, 'expense_common_id' => 18],
        ['country_id' => 2, 'expense_common_id' => 19],
        ['country_id' => 2, 'expense_common_id' => 20],
        ['country_id' => 2, 'expense_common_id' => 21],
        ['country_id' => 2, 'expense_common_id' => 22],
        ['country_id' => 2, 'expense_common_id' => 23],
        ['country_id' => 2, 'expense_common_id' => 24],
        ['country_id' => 2, 'expense_common_id' => 25],
        ['country_id' => 2, 'expense_common_id' => 26],
        ['country_id' => 2, 'expense_common_id' => 27],
        ['country_id' => 2, 'expense_common_id' => 28]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::COUNTRY_EXPENSE_COMMONS as $countryExpenseCommon) {
            CountryExpense::create($countryExpenseCommon);
        }
    }
}
