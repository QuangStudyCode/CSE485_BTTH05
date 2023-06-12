<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Khởi tạo đối tượng Faker để sinh dữ liệu
        $faker = Faker::create();
        $index=0;
        // chạy vòng lặp để sinh dữ liệu
        for ($i = 0; $i < 30; $i++) {
            // khởi tạo đối tượng 
            Category::create([
                'ma_tloai' => $index,
                'ten_tloai' => $faker->sentence(2, true),
            ]);
            $index++;
        }
    }
}