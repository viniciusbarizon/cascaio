<?php

namespace Database\Seeders;

use App\Models\ExpenseCommon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseCommonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpenseCommon::create(['name' => 'Água e saneamento']);
        ExpenseCommon::create(['name' => 'Armazenamento em nuvem']);
        ExpenseCommon::create(['name' => 'Automóvel']);
        ExpenseCommon::create(['name' => 'Cartão de crédito']);
        ExpenseCommon::create(['name' => 'Comércio electrónico']);
        ExpenseCommon::create(['name' => 'Comunicações']);
        ExpenseCommon::create(['name' => 'Condomínio']);
        ExpenseCommon::create(['name' => 'Creche']);
        ExpenseCommon::create(['name' => 'Eletricidade']);
        ExpenseCommon::create(['name' => 'Ensino']);
        ExpenseCommon::create(['name' => 'Esporte']);
        ExpenseCommon::create(['name' => 'Estética']);
        ExpenseCommon::create(['name' => 'Financiamentos']);
        ExpenseCommon::create(['name' => 'Gás']);
        ExpenseCommon::create(['name' => 'Ginásio']);
        ExpenseCommon::create(['name' => 'Impostos']);
        ExpenseCommon::create(['name' => 'Lar de idosos']);
        ExpenseCommon::create(['name' => 'Lazer, recreação e cultura']);
        ExpenseCommon::create(['name' => 'Lojas físicas']);
        ExpenseCommon::create(['name' => 'Lotaria']);
        ExpenseCommon::create(['name' => 'Restauração']);
        ExpenseCommon::create(['name' => 'Saúde']);
        ExpenseCommon::create(['name' => 'Seguros']);
        ExpenseCommon::create(['name' => 'Streaming']);
        ExpenseCommon::create(['name' => 'Supermercado']);
        ExpenseCommon::create(['name' => 'Transporte público']);
        ExpenseCommon::create(['name' => 'TVDE']);
        ExpenseCommon::create(['name' => 'Viagens']);
    }
}
