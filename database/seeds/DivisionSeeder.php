<?php

use App\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $division = new Division();
        $division->sigla = 'FECVIC';
        $division->nombre = 'Fiscalia Especializada en Delitos contra la Vida';
        $division->municipio = 'Ravelo';
        $division->zona = 'las rosas';
        $division->calle = 'flores';
        $division->oficina = 'interior 5';
        $division->save();

        $division = new Division();
        $division->sigla = 'FEVAP';
        $division->nombre = 'Fiscalia Especializada en Asuntos Patrimoniales';
        $division->municipio = 'Potosí';
        $division->zona = 'Central';
        $division->calle = 'Junin';
        $division->oficina = 'interior 2';
        $division->save();

        $division = new Division();
        $division->sigla = 'FDPTS';
        $division->nombre = 'Division de Trabajo Social';
        $division->municipio = 'Potosí';
        $division->zona = 'Central';
        $division->calle = 'Junin';
        $division->oficina = 'interior 5';
        $division->save();
    }
}
