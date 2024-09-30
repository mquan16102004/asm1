<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'name' => fake()->text(20),
                'thumbnail' => fake()->imageUrl(),
                'price' => fake()->numberBetween(100000, 1000000),
                'mota'=>fake()->paragraph(1),
                'danhmuc_id' => rand(1, 5)
            ]);
        }
    }
}
