<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => 'asdffdsa',
        'image' => config('base.image_placeholder'),
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
        'created_at'=>now(),
        'updated_at'=>now()
    ];

        User::create($user);
    }
}
