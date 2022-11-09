<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_defaults')->insert([
            ['id' => 1, 'name' => 'Academia'],
            ['id' => 2, 'name' => 'Água e saneamento'],
            ['id' => 3, 'name' => 'Armazenamento em nuvem'],
            ['id' => 4, 'name' => 'Automóvel'],
            ['id' => 5, 'name' => 'Cartão de crédito'],
            ['id' => 6, 'name' => 'Casa'],
            ['id' => 7, 'name' => 'Casa de repouso'],
            ['id' => 8, 'name' => 'Condomínio'],
            ['id' => 9, 'name' => 'Creche'],
            ['id' => 10, 'name' => 'Educação'],
            ['id' => 11, 'name' => 'Eletricidade'],
            ['id' => 12, 'name' => 'Esporte'],
            ['id' => 13, 'name' => 'Estética'],
            ['id' => 14, 'name' => 'Financiamento'],
            ['id' => 15, 'name' => 'Gás'],
            ['id' => 16, 'name' => 'Impostos'],
            ['id' => 17, 'name' => 'Lazer'],
            ['id' => 18, 'name' => 'Loteria'],
            ['id' => 19, 'name' => 'Móveis & Eletrônica'],
            ['id' => 20, 'name' => 'Restaurante'],
            ['id' => 21, 'name' => 'Roupa & Acessórios'],
            ['id' => 22, 'name' => 'Saúde & Bem-estar'],
            ['id' => 23, 'name' => 'Seguros'],
            ['id' => 24, 'name' => 'Streaming'],
            ['id' => 25, 'name' => 'Supermercado'],
            ['id' => 26, 'name' => 'Telecomunicação'],
            ['id' => 27, 'name' => 'Transporte'],
            ['id' => 28, 'name' => 'Viagem']
        ]);
    }
}
