<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>now(),
            'password'=> bcrypt('12345678'),
            'is_admin'=>1,
        ]);
    }
}
