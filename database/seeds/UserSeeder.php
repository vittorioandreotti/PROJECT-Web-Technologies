<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User, Staff e Admin
        DB::table('users')->insert ([ 
            ['name'=>'User',
             'surname'=>'User',
             'email'=>'useruser@tweb.com',
             'username'=>'useruser',
             'password'=>Hash::make('pQoQBc8A'),
             'role'=>'user',
             'residence'=>'Pavia',
             'birthday'=>'1993-02-19',
             'job'=>'Operaio',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['name'=>'Staff',
             'surname'=>'Staff',
             'email'=>'staffstaff@tweb.com',
             'username'=>'staffstaff',
             'password'=>Hash::make('pQoQBc8A'),
             'role'=>'staff',
             'residence'=>'Bologna',
             'birthday'=>'1984-04-21',
             'job'=>'Architetto',
            'created_at' => date("Y-m-d H:i:s"),
             'updated_at' => date("Y-m-d H:i:s")],
            ['name'=>'Admin',
             'surname'=>'Admin',
             'email'=>'adminadmin@tweb.com',
             'username'=>'adminadmin',
             'password'=>Hash::make('pQoQBc8A'),
             'role'=>'admin',
             'residence'=>'Lugano',
             'birthday'=>'1989-10-23',
             'job'=>'Insegnante',
             'created_at' => date("Y-m-d H:i:s"),
             'updated_at' => date("Y-m-d H:i:s")],
            
            //Utenti di prova
            ['name'=>'Mario',
             'surname'=>'Rossi',
             'email'=>'mariorossi@tweb.com',
             'username'=>'MarioRossi',
             'password'=>Hash::make('mario_rossi'),
             'role'=>'user',
             'residence'=>'Pavia',
             'birthday'=>'1993-02-19',
             'job'=>'User',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            
            ['name'=>'Luca',
             'surname'=>'Bianchi',
             'email'=>'lucabianchi@tweb.com',
             'username'=>'LucaBianchi',
             'password'=>Hash::make('luca_bianchi'),
             'role'=>'user',
             'residence'=>'Pavia',
             'birthday'=>'1993-02-19',
             'job'=>'User',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            
            ['name'=>'Paolo',
             'surname'=>'Frascati',
             'email'=>'paolofrascati@tweb.com',
             'username'=>'PaoloFrascati',
             'password'=>Hash::make('paolo_frascati'),
             'role'=>'staff',
             'residence'=>'Pavia',
             'birthday'=>'1993-02-19',
             'job'=>'User',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            
            ['name'=>'Antonio',
             'surname'=>'Perlari',
             'email'=>'antonioperlari@tweb.com',
             'username'=>'AntonioPerlari',
             'password'=>Hash::make('antonio_perlari'),
             'role'=>'staff',
             'residence'=>'Pavia',
             'birthday'=>'1993-02-19',
             'job'=>'User',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
        ]);
    }
}
