<?php

namespace Database\Seeders;

use App\Models\ExpenseCommon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseCommonSeeder extends Seeder
{
    const EXPENSES = [
        ['id' => 1, 'name' => 'Água e saneamento', 'language_id' => 1],
        ['id' => 2, 'name' => 'Armazenamento em nuvem', 'language_id' => 1],
        ['id' => 3, 'name' => 'Automóvel', 'language_id' => 1],
        ['id' => 4, 'name' => 'Cartão de crédito', 'language_id' => 1],
        ['id' => 5, 'name' => 'Comércio electrónico', 'language_id' => 1],
        ['id' => 6, 'name' => 'Comunicações', 'language_id' => 1],
        ['id' => 7, 'name' => 'Condomínio', 'language_id' => 1],
        ['id' => 8, 'name' => 'Creche', 'language_id' => 1],
        ['id' => 9, 'name' => 'Eletricidade', 'language_id' => 1],
        ['id' => 10, 'name' => 'Ensino', 'language_id' => 1],
        ['id' => 11, 'name' => 'Esporte', 'language_id' => 1],
        ['id' => 12, 'name' => 'Estética', 'language_id' => 1],
        ['id' => 13, 'name' => 'Financiamentos', 'language_id' => 1],
        ['id' => 14, 'name' => 'Gás', 'language_id' => 1],
        ['id' => 15, 'name' => 'Ginásio', 'language_id' => 1],
        ['id' => 16, 'name' => 'Impostos', 'language_id' => 1],
        ['id' => 17, 'name' => 'Lar de idosos', 'language_id' => 1],
        ['id' => 18, 'name' => 'Lazer, recreação e cultura', 'language_id' => 1],
        ['id' => 19, 'name' => 'Lojas físicas', 'language_id' => 1],
        ['id' => 20, 'name' => 'Lotaria', 'language_id' => 1],
        ['id' => 21, 'name' => 'Restauração', 'language_id' => 1],
        ['id' => 22, 'name' => 'Saúde', 'language_id' => 1],
        ['id' => 23, 'name' => 'Seguros', 'language_id' => 1],
        ['id' => 24, 'name' => 'Streaming', 'language_id' => 1],
        ['id' => 25, 'name' => 'Supermercado', 'language_id' => 1],
        ['id' => 26, 'name' => 'Transporte público', 'language_id' => 1],
        ['id' => 27, 'name' => 'TVDE', 'language_id' => 1],
        ['id' => 28, 'name' => 'Viagens', 'language_id' => 1]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::EXPENSES as $expense) {
            ExpenseCommon::create($expense);
        }
    }
}
