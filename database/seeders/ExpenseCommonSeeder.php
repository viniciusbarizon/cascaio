<?php

namespace Database\Seeders;

use App\Models\ExpenseCommon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseCommonSeeder extends Seeder
{
    const EXPENSES = [
        ['name' => 'Água e saneamento', 'language_id' => 1],
        ['name' => 'Armazenamento em nuvem', 'language_id' => 1],
        ['name' => 'Automóvel', 'language_id' => 1],
        ['name' => 'Cartão de crédito', 'language_id' => 1],
        ['name' => 'Comércio electrónico', 'language_id' => 1],
        ['name' => 'Comunicações', 'language_id' => 1],
        ['name' => 'Condomínio', 'language_id' => 1],
        ['name' => 'Creche', 'language_id' => 1],
        ['name' => 'Eletricidade', 'language_id' => 1],
        ['name' => 'Ensino', 'language_id' => 1],
        ['name' => 'Esporte', 'language_id' => 1],
        ['name' => 'Estética', 'language_id' => 1],
        ['name' => 'Financiamentos', 'language_id' => 1],
        ['name' => 'Gás', 'language_id' => 1],
        ['name' => 'Ginásio', 'language_id' => 1],
        ['name' => 'Impostos', 'language_id' => 1],
        ['name' => 'Lar de idosos', 'language_id' => 1],
        ['name' => 'Lazer, recreação e cultura', 'language_id' => 1],
        ['name' => 'Lojas físicas', 'language_id' => 1],
        ['name' => 'Lotaria', 'language_id' => 1],
        ['name' => 'Restauração', 'language_id' => 1],
        ['name' => 'Saúde', 'language_id' => 1],
        ['name' => 'Seguros', 'language_id' => 1],
        ['name' => 'Streaming', 'language_id' => 1],
        ['name' => 'Supermercado', 'language_id' => 1],
        ['name' => 'Transporte público', 'language_id' => 1],
        ['name' => 'TVDE', 'language_id' => 1],
        ['name' => 'Viagens', 'language_id' => 1]
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
