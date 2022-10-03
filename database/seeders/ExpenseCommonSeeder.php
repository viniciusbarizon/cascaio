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
        ExpenseCommon::create(['name' => 'Cartão de crédito']);
        ExpenseCommon::create(['name' => 'Cinema']);
        ExpenseCommon::create(['name' => 'Creche']);
        ExpenseCommon::create(['name' => 'Armazenamento em nuvem']);
        ExpenseCommon::create(['name' => 'Automóvel']);
        ExpenseCommon::create(['name' => 'Combustível']);
        ExpenseCommon::create(['name' => 'Comércio electrónico']);
        ExpenseCommon::create(['name' => 'Condomínio']);
        ExpenseCommon::create(['name' => 'Concertos e festivais de música']);
        ExpenseCommon::create(['name' => 'Consultas médicas']);
        ExpenseCommon::create(['name' => 'Doutorado']);
        ExpenseCommon::create(['name' => 'Educação']);
        ExpenseCommon::create(['name' => 'Eletricidade']);
        ExpenseCommon::create(['name' => 'Escola básica']);
        ExpenseCommon::create(['name' => 'Escola secundária']);
        ExpenseCommon::create(['name' => 'Esporte']);
        ExpenseCommon::create(['name' => 'Estética']);
        ExpenseCommon::create(['name' => 'Exames médicos']);
        ExpenseCommon::create(['name' => 'Farmácia']);
        ExpenseCommon::create(['name' => 'Financiamento automóvel']);
        ExpenseCommon::create(['name' => 'Financiamento bancário']);
        ExpenseCommon::create(['name' => 'Financiamento imobiliário']);
        ExpenseCommon::create(['name' => 'Gás']);
        ExpenseCommon::create(['name' => 'Ginásio']);
        ExpenseCommon::create(['name' => 'Impostos']);
        ExpenseCommon::create(['name' => 'Lar de idosos']);
        ExpenseCommon::create(['name' => 'Licenciatura']);
        ExpenseCommon::create(['name' => 'Livros']);
        ExpenseCommon::create(['name' => 'Lotaria']);
        ExpenseCommon::create(['name' => 'Material escolar']);
        ExpenseCommon::create(['name' => 'Mestrado']);
        ExpenseCommon::create(['name' => 'Móvel']);
        ExpenseCommon::create(['name' => 'Net']);
        ExpenseCommon::create(['name' => 'Net Voz']);
        ExpenseCommon::create(['name' => 'Net TV Voz']);
        ExpenseCommon::create(['name' => 'Net TV Voz + Móvel']);
        ExpenseCommon::create(['name' => 'Oficina automóvel']);
        ExpenseCommon::create(['name' => 'Passagens aéreas']);
        ExpenseCommon::create(['name' => 'Pós-graduação']);
        ExpenseCommon::create(['name' => 'Restauração']);
        ExpenseCommon::create(['name' => 'Saúde']);
        ExpenseCommon::create(['name' => 'Seguros']);
        ExpenseCommon::create(['name' => 'Seguro auto']);
        ExpenseCommon::create(['name' => 'Seguro saúde']);
        ExpenseCommon::create(['name' => 'Streaming']);
        ExpenseCommon::create(['name' => 'Supermercado']);
        ExpenseCommon::create(['name' => 'Teatro']);
        ExpenseCommon::create(['name' => 'Transporte público']);
        ExpenseCommon::create(['name' => 'TVDE']);
        ExpenseCommon::create(['name' => 'Vestuário']);
        ExpenseCommon::create(['name' => 'Viagens']);
    }
}
