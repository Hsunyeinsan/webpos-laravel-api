<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

$menus = [
    [
        'title' => 'Classic Vanilla Scoop',
        'slug' => Str::slug('Classic Vanilla Scoop'),
        'category_id' => 1, // Vanilla
        'price' => 2500,
        'image' => 'menus/vanilla-classic.jpg',
        'user_id' => 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'title' => 'Double Chocolate Scoop',
        'slug' => Str::slug('Double Chocolate Scoop'),
        'category_id' => 2, // Chocolate
        'price' => 2800,
        'image' => 'menus/double-chocolate.jpg',
        'user_id' => 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'title' => 'Strawberry Delight',
        'slug' => Str::slug('Strawberry Delight'),
        'category_id' => 3, // Strawberry
        'price' => 2600,
        'image' => 'menus/strawberry-delight.jpg',
        'user_id' => 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'title' => 'Mango Tango Scoop',
        'slug' => Str::slug('Mango Tango Scoop'),
        'category_id' => 4, // Mango
        'price' => 2700,
        'image' => 'menus/mango-tango.jpg',
        'user_id' => 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'title' => 'Mint Choco Chip',
        'slug' => Str::slug('Mint Choco Chip'),
        'category_id' => 5, // Mint
        'price' => 2900,
        'image' => 'menus/mint-choco-chip.jpg',
        'user_id' => 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'title' => 'Cookies & Cream Cup',
        'slug' => Str::slug('Cookies & Cream Cup'),
        'category_id' => 6, // Cookies & Cream
        'price' => 3000,
        'image' => 'menus/cookies-cream.jpg',
        'user_id' => 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'title' => 'Pistachio Premium',
        'slug' => Str::slug('Pistachio Premium'),
        'category_id' => 7, // Pistachio
        'price' => 3200,
        'image' => 'menus/pistachio-premium.jpg',
        'user_id' => 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'title' => 'Caramel Swirl',
        'slug' => Str::slug('Caramel Swirl'),
        'category_id' => 8, // Caramel
        'price' => 3100,
        'image' => 'menus/caramel-swirl.jpg',
        'user_id' => 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'title' => 'Coffee Crunch',
        'slug' => Str::slug('Coffee Crunch'),
        'category_id' => 9, // Coffee
        'price' => 2900,
        'image' => 'menus/coffee-crunch.jpg',
        'user_id' => 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'title' => 'Matcha Green Tea',
        'slug' => Str::slug('Matcha Green Tea'),
        'category_id' => 10, // Matcha
        'price' => 3300,
        'image' => 'menus/matcha-green-tea.jpg',
        'user_id' => 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
];

Menu::insert($menus);

    }
}
