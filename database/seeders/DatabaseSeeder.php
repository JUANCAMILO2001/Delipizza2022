<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ProductsTableSeeder::class);

        $user = new User;
        $user->name = 'Admin Camilo';
        $user->lastname = 'Ramirez';
        $user->number = '000';
        $user->email = 'admincamilo@gmail.com';
        $user->password = 'admin1';
        $user->role = 'admin';


        $user = new User;
        $user->name = 'Admin Esteban';
        $user->lastname = 'Escarraga';
        $user->number = '000';
        $user->email = 'adminesteban@gmail.com';
        $user->password = '123456';
        $user->role = 'admin';

        $user->save();




    }
}
