<?php

use Illuminate\Database\Seeder;
Use App\Ejercicio;

class EjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ejercicio::class,8)->create();
    }
}
