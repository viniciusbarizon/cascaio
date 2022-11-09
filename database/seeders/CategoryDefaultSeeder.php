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
            ['id' => 16, 'name' => 'Casa de repouso'],
            ['id' => 7, 'name' => 'Condomínio'],
            ['id' => 8, 'name' => 'Creche'],
            ['id' => 9, 'name' => 'Educação'],
            ['id' => 10, 'name' => 'Eletricidade'],
            ['id' => 11, 'name' => 'Esporte'],
            ['id' => 12, 'name' => 'Estética'],
            ['id' => 13, 'name' => 'Financiamento'],
            ['id' => 14, 'name' => 'Gás'],
            ['id' => 15, 'name' => 'Impostos'],
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
