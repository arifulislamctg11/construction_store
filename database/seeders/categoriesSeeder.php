<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            'category'=>'Bitumen'
        ]);
        DB::table("categories")->insert([
            'category'=>'Concrete'
        ]);
        DB::table("categories")->insert([
            'category'=>'Structural steel'
        ]);
        DB::table("categories")->insert([
            'category'=>'Binding Wires'
        ]);
        DB::table("categories")->insert([
            'category'=>'Fly Ash'
        ]);
    }
}
