<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('profession')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//1
        DB::table('profession')->insert([
            'title'=> 'Desarrollo Back-end',
        ]);
//2
        DB::table('profession')->insert([
            'title'=> 'Desarrollo Front-end',
        ]);
//3
        DB::table('profession')->insert([
            'title'=> 'Desarrollo Developer',
        ]);
//4
        DB::table('profession')->insert([
            'title'=> 'Desarrollo Fullstack',
        ]);
//5
        DB::table('profession')->insert([
            'title'=> 'Freelance',
        ]);
//6
        DB::table('profession')->insert([
            'title'=> 'Desarrollo Aplicacione Moviles',
        ]);
//7
        DB::table('profession')->insert([
            'title'=> 'Desarrollo de juegos multiplataformas',
        ]);
//8
        DB::table('profession')->insert([
            'title'=> 'Desarrollo de aplicaciones multiplataformas',
        ]);
//9
        DB::table('profession')->insert([
            'title'=> 'Creador de contenido',
        ]);
//10
        DB::table('profession')->insert([
            'title'=> 'Manejo y gestion de base de datos',
        ]);
    }
}
