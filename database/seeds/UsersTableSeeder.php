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
            'email' => 'admin',
            'password' => bcrypt('12345'),
            'tipo_usuario' => 'administrador',
        ]);
    }
}
