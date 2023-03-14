<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->updateOrInsert([
            'id' => 1,
            'name' => 'Laravel Personal Access Client',
            'secret' => 'iLiSQD5p9gKHYVig1QJBqAk73yqv2EYL1tBZK3eG',
            'provider' => null,
            'redirect' => 'http://localhost',
            'personal_access_client' => 1    ,
            'password_client' => 0,
            'revoked' => 0,
        ]);

        DB::table('oauth_clients')->updateOrInsert([
            'id' => 2,
            'name' => 'Laravel Password Grant Client',
            'secret' => 'CmepTLnts40uvLjmnvjan51Sq4sIi9tlptrtJfc3',
            'provider' => 'users',
            'redirect' => 'http://localhost',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0,
        ]);
    }
}
