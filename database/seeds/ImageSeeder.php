<?php

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('images')->insert([
            'url' => 'public/carrusel/3izQuJ6pzfdmEQQUbHtyrHRCdLZYMqyS5SPfJxzL.jpeg'
        ]);

        DB::table('images')->insert([
            'url' => 'public/carrusel/4YusKeBFDZ1SvUfkbRcL7lG2PCoF2Ze7jeCF4NyD.jpeg'
        ]);

        DB::table('images')->insert([
            'url' => 'public/carrusel/OfxRVCtUZ8fwf8ro162dbIBu0KMR3fBsKQAmiPib.jpeg'
        ]);

        DB::table('images')->insert([
            'url' => 'public/carrusel/QTyPVCiXD7BfzvQNUCuM5xgvtxZVxLKo5Yb7nne6.jpeg'
        ]);

        DB::table('images')->insert([
            'url' => 'public/carrusel/mVD4w70yV8Tqf33WU5T99ccA5UDFXob7WgsZD3E4.jpeg'
        ]);
    }
}
