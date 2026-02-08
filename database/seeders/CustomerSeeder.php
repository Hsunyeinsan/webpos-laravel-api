<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'name' => 'Aung Aung',
                'email' => 'aung1@gmail.com',
                'phone' => '0912345671',
                'address' => 'Yangon',
                'date_of_birth' => '1995-03-12',
                'gender' => 'male',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Su Su',
                'email' => 'susu2@gmail.com',
                'phone' => '0912345672',
                'address' => 'Mandalay',
                'date_of_birth' => '1998-07-21',
                'gender' => 'female',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ko Ko',
                'email' => 'koko3@gmail.com',
                'phone' => '0912345673',
                'address' => 'Bago',
                'date_of_birth' => '1992-01-10',
                'gender' => 'male',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hnin Hnin',
                'email' => 'hnin4@gmail.com',
                'phone' => '0912345674',
                'address' => 'Taunggyi',
                'date_of_birth' => '2000-11-05',
                'gender' => 'female',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Min Min',
                'email' => 'min5@gmail.com',
                'phone' => '0912345675',
                'address' => 'Pyay',
                'date_of_birth' => '1996-05-30',
                'gender' => 'male',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'May May',
                'email' => 'may6@gmail.com',
                'phone' => '0912345676',
                'address' => 'Naypyidaw',
                'date_of_birth' => '1999-09-18',
                'gender' => 'female',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tun Tun',
                'email' => 'tun7@gmail.com',
                'phone' => '0912345677',
                'address' => 'Monywa',
                'date_of_birth' => '1991-02-14',
                'gender' => 'male',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ei Ei',
                'email' => 'ei8@gmail.com',
                'phone' => '0912345678',
                'address' => 'Meiktila',
                'date_of_birth' => '2001-12-01',
                'gender' => 'female',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Zaw Zaw',
                'email' => 'zaw9@gmail.com',
                'phone' => '0912345679',
                'address' => 'Hpa-An',
                'date_of_birth' => '1994-06-08',
                'gender' => 'male',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thiri',
                'email' => 'thiri10@gmail.com',
                'phone' => '0912345680',
                'address' => 'Pathein',
                'date_of_birth' => '1997-10-25',
                'gender' => 'female',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Customer::insert($customers);

    }
}
