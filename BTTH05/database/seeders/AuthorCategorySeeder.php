<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Category;
use App\Models\Article;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class AuthorCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        $authors = Author::all();
        $categories = Category::all();
        $faker = Faker::create();

        foreach ($authors as $author) {
            foreach ($categories as $category) {
                DB::table('baiviet')->insert([
                    'ma_tloai' => $category->ma_tloai,
                    'ma_tgia' => $author->ma_tgia,
                    'tieude' => $faker->sentence(5),
                    'ten_bhat' => $faker->name(),
                    'tomtat' => $faker->sentences(5,true),
                    'noidung' => $faker->paragraph(10,true),
                    'ngayviet' => now(),
                    'hinhanh' => $faker->imageUrl(),   
                ]);
            }
        }
    }
}