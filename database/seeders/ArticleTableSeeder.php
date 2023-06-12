<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        $index = 1;
        $index1 = 1;
        $index2 = 1;

        for ($i = 0; $i < 24; $i++) {
            Article::create([
                'ma_bviet' => $index,
                'tieude' => $faker->sentence(3, true),
                'ten_bhat' => $faker->sentence(3, true),
                'ma_tloai' => $index1,
                // generate data from 1 -4
                // 'ma_tloai' => $faker->numberBetween(1,4),
                'tomtat' => $faker->sentence(3, true),
                'noidung' => $faker->sentence(3, true),
                'ma_tgia' => $index2,
                'ngayviet' => $faker->dateTime(),
                // 'hinhanh' => $faker->imageUrl(200,200,'animals',true),
                'hinhanh' => $faker->sentence(3, true),
            ]);
            $index++;
            $index1++;
            $index2++;
        }
    }
}
