<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//1
        DB::table('users')->insert([
            'name' => 'Leonel Cortez',
            'email' => 'leonel@gmail.com',
            'password' => bcrypt('leonel'),
            'profession_id' => '3'
        ]);
//2
        DB::table('users')->insert([
            'name' => 'Armando Garcia',
            'email' => 'armando@gmail.com',
            'password' => bcrypt('armando'),
            'profession_id' => '2'
        ]);
//3
        DB::table('users')->insert([
            'name' => 'Victor Andres',
            'email' => 'victor@gmail.com',
            'password' => bcrypt('victor'),
            'profession_id' => '1'
        ]);
//4
        DB::table('users')->insert([
            'name' => 'Daniel Diaz',
            'email' => 'daniel@gmail.com',
            'password' => bcrypt('daniel'),
            'profession_id' => '6'
        ]);
//5
        DB::table('users')->insert([
            'name' => 'Carlos Perez',
            'email' => 'carlos@gmail.com',
            'password' => bcrypt('carlos'),
            'profession_id' => '5'
        ]);
//6
        DB::table('users')->insert([
            'name' => 'nathaly Zelaya',
            'email' => 'nathaly@gmail.com',
            'password' => bcrypt('nathaly'),
            'profession_id' => '4'
        ]);
//7
        DB::table('users')->insert([
            'name' => 'Rosmary Flores',
            'email' => 'rosmary@gmail.com',
            'password' => bcrypt('rosmary'),
            'profession_id' => '10'
        ]);
//8
        DB::table('users')->insert([
            'name' => 'Alba Cortez',
            'email' => 'alba@gmail.com',
            'password' => bcrypt('alba'),
            'profession_id' => '9'
        ]);
//9
        DB::table('users')->insert([
            'name' => 'Julio Torres',
            'email' => 'julio@gmail.com',
            'password' => bcrypt('julio'),
            'profession_id' => '8'
        ]);
//10
        DB::table('users')->insert([
            'name' => 'Alexis Cortez',
            'email' => 'alexis@gmail.com',
            'password' => bcrypt('alexis'),
            'profession_id' => '7'
        ]);
    }
}
