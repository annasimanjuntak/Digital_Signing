<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\User;
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
        // User::create([
        //     'name'=>'Eko Khannedy',
        //     'email'=>'eko@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        // User::create([
        //     'name'=>'Ferdinan',
        //     'email'=>'ferdinan@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        // User::create([
        //     'name'=>'Sandhika',
        //     'email'=>'sandhika@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        User::factory(4)->create();

        // Document::factory(8)->create();


    }
}
