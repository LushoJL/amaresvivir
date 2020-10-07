<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //niños
        DB::table('options')->insert([
            'option' => 'JOAQUÍN',
            'type' => 'radio',
            'position_id' => 1,
        ]);

        DB::table('options')->insert([
            'option' => 'TITO',
            'type' => 'radio',
            'position_id' => 1,
        ]);

        DB::table('options')->insert([
            'option' => 'LOS DEMAS COMPAÑEROS',
            'type' => 'radio',
            'position_id' => 1,
        ]);

        DB::table('options')->insert([
            'option' => 'SERIA IGUAL',
            'type' => 'radio',
            'position_id' => 2,
        ]);

        DB::table('options')->insert([
            'option' => 'CAMBIARIA',
            'type' => 'radio',
            'position_id' => 2,
        ]);

        DB::table('options')->insert([
            'option' => 'PEDIRIA AYUDA',
            'type' => 'radio',
            'position_id' => 2,
        ]);

        DB::table('options')->insert([
            'option' => 'SI',
            'type' => 'radio',
            'position_id' => 3,
        ]);

        DB::table('options')->insert([
            'option' => 'no',
            'type' => 'radio',
            'position_id' => 3,
        ]);

        DB::table('options')->insert([
            'option' => 'SI',
            'type' => 'radio',
            'position_id' => 4,
        ]);

        DB::table('options')->insert([
            'option' => 'NO',
            'type' => 'radio',
            'position_id' => 4,
        ]);

        DB::table('options')->insert([
            'option' => 'SI',
            'type' => 'radio',
            'position_id' => 5,
        ]);

        DB::table('options')->insert([
            'option' => 'NO',
            'type' => 'radio',
            'position_id' => 5,
        ]);

        DB::table('options')->insert([
            'option' => 'AMENAZAS',
            'type' => 'radio',
            'position_id' => 6,
        ]);

        DB::table('options')->insert([
            'option' => 'MIEDO',
            'type' => 'radio',
            'position_id' => 6,
        ]);

        DB::table('options')->insert([
            'option' => 'VUERGÜENZA',
            'type' => 'radio',
            'position_id' => 6,
        ]);

        DB::table('options')->insert([
            'option' => 'ME GUSTA',
            'type' => 'radio',
            'position_id' => 6,
        ]);

        DB::table('options')->insert([
            'option' => 'OTRA RAZON:',
            'type' => 'text',
            'position_id' => 6,
        ]);

        //niñas
        DB::table('optionninas')->insert([
            'option' => 'MARITA',
            'type' => 'radio',
            'position_id' => 1,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'JULIETA',
            'type' => 'radio',
            'position_id' => 1,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'LOS DEMAS COMPAÑEROS',
            'type' => 'radio',
            'position_id' => 1,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'SERIA IGUAL',
            'type' => 'radio',
            'position_id' => 2,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'CAMBIARIA',
            'type' => 'radio',
            'position_id' => 2,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'PEDIRIA AYUDA',
            'type' => 'radio',
            'position_id' => 2,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'SI',
            'type' => 'radio',
            'position_id' => 3,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'no',
            'type' => 'radio',
            'position_id' => 3,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'SI',
            'type' => 'radio',
            'position_id' => 4,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'NO',
            'type' => 'radio',
            'position_id' => 4,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'SI',
            'type' => 'radio',
            'position_id' => 5,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'NO',
            'type' => 'radio',
            'position_id' => 5,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'AMENAZAS',
            'type' => 'radio',
            'position_id' => 6,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'MIEDO',
            'type' => 'radio',
            'position_id' => 6,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'VUERGÜENZA',
            'type' => 'radio',
            'position_id' => 6,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'ME GUSTA',
            'type' => 'radio',
            'position_id' => 6,
        ]);

        DB::table('optionninas')->insert([
            'option' => 'OTRA RAZON:',
            'type' => 'text',
            'position_id' => 6,
        ]);
    }
}
