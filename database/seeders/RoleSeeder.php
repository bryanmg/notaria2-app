<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ["nombre" => "Admin", 'nivel' => 1],
            ["nombre" => "Cliente", 'nivel' => 2]
        ];

        DB::table('roles')->insert($roles);
    }
}
