<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('questions')->insert([
            'position' => 1,
            'question' => '¿CON QUE PERSONAJE TE IDENTIFICAS DEL CUENTO?',
            'category' => 'niño'
        ]);

        DB::table('questions')->insert([
            'position' => 2,
            'question' => '¿QUÉ HARÍAS TÚ EN LUGAR DEL PERSONAJE QUE ELEGISTE?',
            'category' => 'niño'
        ]);

        DB::table('questions')->insert([
            'position' => 3,
            'question' => '¿LE DIRÍAS A ALGUIEN SI VIERAS QUE OTRO SUFRE COMO JOAQUÍN?',
            'category' => 'niño'
        ]);

        DB::table('questions')->insert([
            'position' => 4,
            'question' => '¿HAS SUFRIDO LO MISMO QUE JOAQUÍN ALGUNA VEZ?',
            'category' => 'niño'
        ]);

        DB::table('questions')->insert([
            'position' => 5,
            'question' => '¿SE LO CONTASTE A ALGUIEN, PARA PEDIR AYUDA (A TUS PAPAS, AMIGOS, MAESTRA/O)?',
            'category' => 'niño'
        ]);

        DB::table('questions')->insert([
            'position' => 6,
            'question' => '¿POR QUÉ NO SE LO CONTARÍAS A ALGUIEN?',
            'category' => 'niño'
        ]);

        //Niñas
        DB::table('questionninas')->insert([
            'position' => 1,
            'question' => '¿CON QUE PERSONAJE TE IDENTIFICAS DEL CUENTO?',
            'category' => 'niña'
        ]);

        DB::table('questionninas')->insert([
            'position' => 2,
            'question' => '¿QUÉ HARÍAS TÚ EN LUGAR DEL PERSONAJE QUE ELEGISTE?',
            'category' => 'niña'
        ]);

        DB::table('questionninas')->insert([
            'position' => 3,
            'question' => '¿LE DIRÍAS A ALGUIEN SI VIERAS QUE OTRO SUFRE COMO MARITA?',
            'category' => 'niña'
        ]);

        DB::table('questionninas')->insert([
            'position' => 4,
            'question' => '¿HAS SUFRIDO LO MISMO QUE MARITA ALGUNA VEZ?',
            'category' => 'niña'
        ]);

        DB::table('questionninas')->insert([
            'position' => 5,
            'question' => '¿HAS SUFRIDO LO MISMO QUE MARITA ALGUNA VEZ?',
            'category' => 'niña'
        ]);

        DB::table('questionninas')->insert([
            'position' => 6,
            'question' => '¿POR QUÉ NO SE LO CONTARÍAS A ALGUIEN?',
            'category' => 'niña'
        ]);
    }
}
