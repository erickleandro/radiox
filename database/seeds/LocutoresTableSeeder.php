<?php

use Illuminate\Database\Seeder;

use App\Models\Locutor;

class LocutoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $locutor = new Locutor();
        // $locutor->nome = 'João';
        // $locutor->save();

    	$locutor = Locutor::find(2);
        $locutor->nome = 'Joana';
        $locutor->save();

    	$locutor = Locutor::find(3);
        $locutor->nome = 'Renata';
        $locutor->save();
    }
}
