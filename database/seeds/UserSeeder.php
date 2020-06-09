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

        ]);
    }
}
