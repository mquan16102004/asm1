<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class danhmucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danhmuc')->insert([
            ['title' => 'áo adidas'],
            ['title' => 'quần adidas'],
            ['title' => 'balo adidas'],
            ['title' => 'giầy adidas']
           ]);
    }
}
