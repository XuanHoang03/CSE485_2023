<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Author;
use Illuminate\Support\Facades\DB;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0 ; $i <1 ; $i++){
            DB::table('tacgia')->insert([
                'ten_tgia' => $faker->name,
                'hinh_tgia' => $faker->imageUrl(),
            ]);
        }
    }
}