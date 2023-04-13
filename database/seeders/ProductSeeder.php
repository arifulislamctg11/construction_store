<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB ::table('products')->insert([
            'name' => 'Milk',
            'price' => 90,
            'category' => 'Dairy',
        ]);
        DB ::table('products')->insert([
            'name' => 'Bread',
            'price' => 10,
            'category' => 'Bakery',
        ]);
    }
}
