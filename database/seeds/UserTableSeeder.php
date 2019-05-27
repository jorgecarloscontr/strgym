<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\User();
        $admin->name = 'Administrador';
        $admin->email = 'admin@prueba.com';
        $admin->rol = 'admin';
        $admin->email_verified_at = now();
        $admin->password = '$2y$10$Gh2XtGSHKj1R10fPvCfvj.nhTHpmcQ.lMEmxfTHWRu6cZSjKb/rZS';
        $admin->remember_token = Str::random(10);
        $admin->save();
        factory(App\User::class, 15)->create();
    }
}
