<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tieude' => $this->faker->sentence(5),
            'ten_bhat' => $this->faker->name(),
            'ma_tloai' => null,
            'tomtat' => $this->faker->sentences(5,true),
            'noidung' => $this->faker->paragraph(10,true),
            'ma_tgia' => null,
            'ngayviet' => $this->faker->dateTime(),
            'hinhanh' => $this->faker->imageUrl(),        ];
    }
}