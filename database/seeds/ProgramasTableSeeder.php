<?php

use Illuminate\Database\Seeder;
use App\Models\Programa;

class ProgramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programa = new Programa();
        $programa->locutor_id = 1;
        $programa->nome = 'Sons do Brasil';
        $programa->horario = '10:00';
        $programa->save();

        $programa = new Programa();
        $programa->locutor_id = 2;
        $programa->nome = 'Momento Jovem';
        $programa->horario = '12:00';
        $programa->save();

        $programa = new Programa();
        $programa->locutor_id = 3;
        $programa->nome = 'Estação X';
        $programa->horario = '14:00';
        $programa->save();
    }
}
