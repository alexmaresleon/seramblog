<?php

namespace Database\Seeders;

use App\Models\User;
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
        //
        User::create([
            'name' => 'Alejandro Mares',
            'email' => 'alexmaresleon@gmail.com',
            'password' => bcrypt('Tarokun3'),

        ]);
        
        User::factory(4)->create();
    }
}
