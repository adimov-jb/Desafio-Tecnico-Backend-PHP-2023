<?php

namespace Database\Seeders;

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
        User::create([
            'name' => 'Dimov',
            'email' => 'andredimov@hotmail.com',
            'password' => \Hash::make('123') ,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
