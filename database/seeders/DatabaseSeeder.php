<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory()->create([
             'name' => 'User Example',
             'email' => 'user@example.com',
         ]);

        $this->call([
            PassportSeeder::class,
            LojasSeeder::class,
            ProdutosSeeder::class,
        ]);
    }
}
