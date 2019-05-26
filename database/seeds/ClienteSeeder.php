<?php

use Illuminate\Database\Seeder;
Use App\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Cliente::Create([
            'nombre' => 'pedro',
            'apellido' => 'perez',
            'sexo' => 'm',
            'nacimiento'=> '1999-05-02',
            'telefono' => '321465987',
        ]);*/
        factory(App\Cliente::class,25)->create();
    }
}
