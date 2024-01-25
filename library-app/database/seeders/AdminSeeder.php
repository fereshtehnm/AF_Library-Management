<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = \App\Models\Manager::create([
            'name' =>'admin',
            'phone_number' =>'09114708911',
            'email' =>'admin@gmail.com',
            'password'=> bcrypt('123456789'),
         ]);
         $admin->assignRole('admin');
    }
}
