<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'role' => 'administrator',
                'name' => 'fauwaz',
                'email' => 'fauwaz@gmail.com',
                'password' => bcrypt('Admin123'),
            ],
            [
                'role' => 'kasir',
                'name' => 'abdul',
                'email' => 'abdul@gmail.com',
                'password' => bcrypt('Kasir123'),
            ],
            [
                'role' => 'user',
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('User111'),
            ],
            [
                'role' => 'user',
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => bcrypt('User222'),
            ]
        ]);
    }
}
