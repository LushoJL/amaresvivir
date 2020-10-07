<?php

use App\About;
use App\semaforo;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('12345678')
                ]);
                semaforo::Create();


                About::create([
                    'mision'=>'ingrese su mision',
                    'vision'=>'ingrese su vision',
                    'filosofia'=>'ingrese su filosofia',
                    'objetivo'=>'ingrese sus objetivos',
                    'ornigrama'=>'no hay imagen'
                ]);




    }
}
