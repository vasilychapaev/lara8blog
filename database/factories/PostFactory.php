<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
//            'slug' => Str::slug($this->faker->sentence),  // fill by Sluggable package
            'description' => $this->faker->paragraph,
            'content' => $this->faker->paragraphs(5, true),
            'category_id' => $this->faker->numberBetween(1,5),
            'thumbnail' => $this->faker->imageUrl(640, 480, 'public/images/posts'),
            'views' => $this->faker->randomDigit(),
        ];
    }
}
