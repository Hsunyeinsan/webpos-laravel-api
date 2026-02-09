<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now(); // current timestamp

        $categories = [
            [
                'title' => 'Bread',
                'slug' => Str::slug('Bread'),
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Cakes',
                'slug' => Str::slug('Cakes'),
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Pastries',
                'slug' => Str::slug('Pastries'),
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Cookies',
                'slug' => Str::slug('Cookies'),
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Muffins',
                'slug' => Str::slug('Muffins'),
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Donuts',
                'slug' => Str::slug('Donuts'),
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Sandwiches',
                'slug' => Str::slug('Sandwiches'),
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Bagels',
                'slug' => Str::slug('Bagels'),
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Tarts',
                'slug' => Str::slug('Tarts'),
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Specials',
                'slug' => Str::slug('Specials'),
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Category::insert($categories);

    }
}
