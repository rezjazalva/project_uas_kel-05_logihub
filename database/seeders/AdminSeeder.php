<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'no_induk' => '1204200010',
                'name' => 'dimas',
                'usia' => '22',
                'status_kedudukan' => 'Kepala',
                'email' => 'dimas@gmail.com',
                'password' => bcrypt('password'),

            ],
        ]);
    }
}
