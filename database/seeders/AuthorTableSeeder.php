<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        $index = 0;

    
        for ($i = 0; $i < 30; $i++) {
            // khởi tạo đối tượng 
            Author::create([
                'ma_tgia' => $index,
                'ten_tgia' => $faker->sentence(2, true),
                'hinh_tgia' => $faker->sentence(2, true),
            ]);
            $index ++;
        }
    }
}
