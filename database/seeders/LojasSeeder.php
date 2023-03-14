<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LojasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lojas')->updateOrInsert([
            'id' => 1,
            'nome_empresa' => 'Empresa Example',
            'razao_social' => 'Razão example ',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('lojas')->updateOrInsert([
            'id' => 2,
            'nome_empresa' => 'Empresa 1',
            'razao_social' => 'Razão 1 ',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('lojas')->updateOrInsert([
            'id' => 3,
            'nome_empresa' => 'Empresa 2',
            'razao_social' => 'Razão 2 ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
