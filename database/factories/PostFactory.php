<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->words(5,true);

        return [
            'name'                    => $name,
            'slug'                    => Str::slug($name),
            'description'             => $this->faker->sentence(15),
            'image'                   => $this->faker->imageUrl(400,400),
            'category_id'             =>Category::inRandomOrder()->first()->id,
            'user_id'                 =>User::inRandomOrder()->first()->id,
        ];
    }
}
