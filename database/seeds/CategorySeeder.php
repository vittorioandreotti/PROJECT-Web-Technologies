<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            ['codCat' => 1, 'name' => 'Componenti PC', 'codPar' => 0, 'desc' => 'Ram, Scheda Video, Schede Madri,CPU'],
            ['codCat' => 2, 'name' => 'Audio', 'codPar' => 0, 'desc' => 'Cuffie Bluetooth, Console da DJ,AirPods,Registratori '],
            ['codCat' => 3, 'name' => 'Fotografia', 'codPar' => 0, 'desc' => 'Reflex,Istantanee,Action Cam,Telescopi'],
            ['codCat' => 4, 'name' => 'Ram', 'codPar' => 1, 'desc' => 'Descrizione delle Ram'],
            ['codCat' => 5, 'name' => 'Schede Video', 'codPar' => 1, 'desc' => 'Descrizione delle Schede Video'],
            ['codCat' => 6, 'name' => 'Schede Madri', 'codPar' => 1, 'desc' => 'Descrizione dei Dischi Rigidi'],
            ['codCat' => 7, 'name' => 'CPU', 'codPar' => 1, 'desc' => 'Descrizione delle CPU'],
            ['codCat' => 8, 'name' => 'Cuffie Bluetooth', 'codPar' => 2, 'desc' => 'Descrizione delle Cuffie Bluetooth'],
            ['codCat' => 9, 'name' => 'Console da DJ', 'codPar' => 2, 'desc' => 'Descrizione delle Console da DJ'],
            ['codCat' => 10, 'name' => 'AirPods', 'codPar' => 2, 'desc' => 'Descrizione delle AirPods'],
            ['codCat' => 11, 'name' => 'Registratori', 'codPar' => 2, 'desc' => 'Descrizione dei Registratori'],
            ['codCat' => 12, 'name' => 'Reflex', 'codPar' => 3, 'desc' => 'Descrizione delle Reflex'],
            ['codCat' => 13, 'name' => 'Videocamere', 'codPar' => 3, 'desc' => 'Descrizione delle Videocamere']
        ]);
    }
}
