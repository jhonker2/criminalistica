<?php

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
       DB::table('users')->insert([
            'nombre'=>'Jhony Guaman',
            'email' => 'admin2',
            'password' => bcrypt('12345'),
            'tipo_usuario' => 'Administrador',
        ]);
       DB::table('users')->insert([
            'nombre'=>'Yandry',
            'email' => 'hjandry',
            'password' => bcrypt('12345'),
            'tipo_usuario' => 'Administrador',
        ]);
    }
}
