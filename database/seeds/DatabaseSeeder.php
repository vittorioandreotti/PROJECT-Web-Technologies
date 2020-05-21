<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('Categoria')->insert([
            ['catCat' => 1, 'name' => 'Componenti PC', 'codPar' => 0, 'desc' => 'Ram, Scheda Video, Schede Madri,CPU'],
            ['catCat' => 2, 'name' => 'Audio', 'codPar' => 0, 'desc' => 'Cuffie Bluetooth, Console da DJ,AirPods,Registratori '],
            ['catCat' => 3, 'name' => 'Fotografia', 'codPar' => 0, 'desc' => 'Reflex,Istantanee,Action Cam,Telescopi'],
            ['catCat' => 4, 'name' => 'Ram', 'codPar' => 1, 'desc' => 'Descrizione delle Ram'],
            ['catCat' => 5, 'name' => 'Schede Video', 'codPar' => 1, 'desc' => 'Descrizione delle Schede Video'],
            ['catCat' => 6, 'name' => 'Schede Madri', 'codPar' => 1, 'desc' => 'Descrizione dei Dischi Rigidi'],
            ['catCat' => 7, 'name' => 'CPU', 'codPar' => 1, 'desc' => 'Descrizione delle CPU'],
            ['catCat' => 8, 'name' => 'Cuffie Bluetooth', 'codPar' => 2, 'desc' => 'Descrizione delle Cuffie Bluetooth'],
            ['catCat' => 9, 'name' => 'Console da DJ', 'codPar' => 2, 'desc' => 'Descrizione delle Console da DJ'],
            ['catCat' => 10, 'name' => 'AirPods', 'codPar' => 2, 'desc' => 'Descrizione delle AirPods'],
            ['catCat' => 11, 'name' => 'Registratori', 'codPar' => 2, 'desc' => 'Descrizione dei Registratori'],
            ['catCat' => 12, 'name' => 'Reflex', 'codPar' => 3, 'desc' => 'Descrizione delle Reflex'],
            ['catCat' => 13, 'name' => 'Istantanee', 'codPar' => 3, 'desc' => 'Descrizione delle Istantanee'],
            ['catCat' => 14, 'name' => 'Action Cam', 'codPar' => 3, 'desc' => 'Descrizione delle Action CAm'],
            ['catCat' => 15, 'name' => 'Telescopi', 'codPar' => 3, 'desc' => 'Descrizione dei Telescopi'],
        ]);
    }
}
