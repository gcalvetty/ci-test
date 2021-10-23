<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAdmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'Guillermo Calvetty',
            'celular' => '77413754',
            'cedula' => '3999272',
            'tipo_Usu' => 'Admin',
            'fec_nac' => '1975-07-26',
            'cod_ciudad' => 'BOL',
            'email' => 'gcalvetty@gecndev.com',
            'password' => Hash::make('password'),
        ]);
        
    }
}
