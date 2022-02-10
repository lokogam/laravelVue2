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
        User::create([
            'name' => 'duvan Gamboa',
            'email' =>'duvangamboa@gmail.com',
            'password' => bcrypt('123123123')
        ]);

        User::factory(5)->create();
    }
}
