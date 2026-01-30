<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        'name' => 'ခိုင်ခိုင်',
        'year' => 1990,
        'phone' => '0912345678',
        'email' => 'kaingkaing@example.com',
        'township' => 'လှိုင်သာယာ',
        'state_division' => 'ရန်ကုန်',
        'created_at'=>now(),
        'updated_at'=>now(),
    ],
    [
        'name' => 'မိုးမိုး',
        'year' => 1985,
        'phone' => '0923456789',
        'email' => 'moemoe@example.com',
        'township' => 'မင်္ဂလာဒုံ',
        'state_division' => 'ရန်ကုန်',
        'created_at'=>now(),
        'updated_at'=>now(),
    ],
    [
        'name' => 'စိုးစိုး',
        'year' => 1992,
        'phone' => '0934567890',
        'email' => 'soesoe@example.com',
        'township' => 'တောင်သူဇနယ်',
        'state_division' => 'မန္တလေး',
        'created_at'=>now(),
        'updated_at'=>now(),
    ],
    [
        'name' => 'သန်းလွင်',
        'year' => 1988,
        'phone' => '0945678901',
        'email' => 'thanlwin@example.com',
        'township' => 'ဓမ္မစကြာ',
        'state_division' => 'နေပြည်တော်',
        'created_at'=>now(),
        'updated_at'=>now(),
    ],
    [
        'name' => 'နန်းနန်း',
        'year' => 1995,
        'phone' => '0956789012',
        'email' => 'nannann@example.com',
        'township' => 'မုံရွာ',
        'state_division' => 'စစ်ကိုင်း',
        'created_at'=>now(),
        'updated_at'=>now(),
    ],
    [
        'name' => 'ခင်မောင်',
        'year' => 1991,
        'phone' => '0967890123',
        'email' => 'khinmaung@example.com',
        'township' => 'ပုသိမ်',
        'state_division' => 'မကွေး',
        'created_at'=>now(),
        'updated_at'=>now(),
    ],
    [
        'name' => 'သိန်းသိန်း',
        'year' => 1989,
        'phone' => '0978901234',
        'email' => 'theinthein@example.com',
        'township' => 'လေးမျိုး',
        'state_division' => 'ရန်ကုန်',
        'created_at'=>now(),
        'updated_at'=>now(),
    ],
    [
        'name' => 'မောင်မောင်',
        'year' => 1993,
        'phone' => '0989012345',
        'email' => 'maungmaung@example.com',
        'township' => 'ကျောက်တံခွန်',
        'state_division' => 'မန္တလေး',
        'created_at'=>now(),
        'updated_at'=>now(),
    ],
    [
        'name' => 'ဇင်ဇင်',
        'year' => 1994,
        'phone' => '0990123456',
        'email' => 'zinzin@example.com',
        'township' => 'မုံရွာ',
        'state_division' => 'စစ်ကိုင်း',
        'created_at'=>now(),
        'updated_at'=>now(),
    ],
    [
        'name' => 'မောင်ထွန်း',
        'year' => 1990,
        'phone' => '0911122233',
        'email' => 'maunghtun@example.com',
        'township' => 'လှိုင်သာယာ',
        'state_division' => 'ရန်ကုန်',
        'created_at'=>now(),
        'updated_at'=>now(),
    ],
];

    Customer::insert($customers);

    }
}
