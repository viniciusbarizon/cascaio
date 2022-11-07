<?php

namespace Database\Seeders;

use App\Models\ExpenseCommon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    const EXPENSES = [
        ['id' => 1, 'name' => 'Água e saneamento', 'language_id' => 1],
        ['id' => 2, 'name' => 'Armazenamento em nuvem', 'language_id' => 1],
        ['id' => 3, 'name' => 'Automóvel', 'language_id' => 1],
        ['id' => 4, 'name' => 'Cartão de crédito', 'language_id' => 1],
        ['id' => 5, 'name' => 'Casa', 'language_id' => 1],
        ['id' => 6, 'name' => 'Condomínio', 'language_id' => 1],
        ['id' => 7, 'name' => 'Creche', 'language_id' => 1],
        ['id' => 8, 'name' => 'Desporto', 'language_id' => 1],
        ['id' => 9, 'name' => 'Educação', 'language_id' => 1],
        ['id' => 10, 'name' => 'Eletricidade', 'language_id' => 1],
        ['id' => 11, 'name' => 'Estética', 'language_id' => 1],
        ['id' => 12, 'name' => 'Financiamento', 'language_id' => 1],
        ['id' => 13, 'name' => 'Gás', 'language_id' => 1],
        ['id' => 14, 'name' => 'Ginásio', 'language_id' => 1],
        ['id' => 15, 'name' => 'Impostos', 'language_id' => 1],
        ['id' => 16, 'name' => 'Lar de idosos', 'language_id' => 1],
        ['id' => 17, 'name' => 'Lazer', 'language_id' => 1],
        ['id' => 18, 'name' => 'Lotaria', 'language_id' => 1],
        ['id' => 19, 'name' => 'Móveis & Eletrónica', 'language_id' => 1],
        ['id' => 20, 'name' => 'Restauração', 'language_id' => 1],
        ['id' => 21, 'name' => 'Roupa & Acessórios', 'language_id' => 1],
        ['id' => 22, 'name' => 'Saúde & Bem-estar', 'language_id' => 1],
        ['id' => 23, 'name' => 'Seguros', 'language_id' => 1],
        ['id' => 24, 'name' => 'Streaming', 'language_id' => 1],
        ['id' => 25, 'name' => 'Supermercado', 'language_id' => 1],
        ['id' => 26, 'name' => 'Telecomunicação', 'language_id' => 1],
        ['id' => 27, 'name' => 'Transporte', 'language_id' => 1],
        ['id' => 28, 'name' => 'Viagem', 'language_id' => 1]
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
