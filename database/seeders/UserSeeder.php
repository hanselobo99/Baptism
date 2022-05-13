<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Pris',
            'role_id' =>1,
            'email' => 'pris@gmail.com',
            'password' => bcrypt('admin')
        ]);
        User::create([
            'name' => 'Cris',
            'email' => 'cris@gmail.com',
            'password' => bcrypt('staff')
        ]);
    }
}
