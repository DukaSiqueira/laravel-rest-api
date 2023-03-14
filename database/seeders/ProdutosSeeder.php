<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->updateOrInsert([
            'id' => 1,
            'nome' => 'produto 1',
            'valor' => 150.22,
            'loja_id' => 1,
            'ativo' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('produtos')->updateOrInsert([
            'id' => 2,
            'nome' => 'produto 2',
            'valor' => 15,
            'loja_id' => 1,
            'ativo' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('produtos')->updateOrInsert([
            'id' => 3,
            'nome' => 'produto 3',
            'valor' => 83.26,
            'loja_id' => 1,
            'ativo' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('produtos')->updateOrInsert([
            'id' => 4,
            'nome' => 'produto 4',
            'valor' => 53.6,
            'loja_id' => 2,
            'ativo' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('produtos')->updateOrInsert([
            'id' => 5,
            'nome' => 'produto 5',
            'valor' => 78.92,
            'loja_id' => 2,
            'ativo' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('produtos')->updateOrInsert([
            'id' => 6,
            'nome' => 'produto 6',
            'valor' => 3.26,
            'loja_id' => 2,
            'ativo' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
