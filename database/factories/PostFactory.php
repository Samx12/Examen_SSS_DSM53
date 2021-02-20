<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' =>$this->faker->sentence,
            'slug' => $this->faker->slug,
            'descripcion' => $this->faker->text(6),
            'image' => $this->faker->imageUrl(12800,720),
            'extract' => $this->faker->text(6),

            'user_id' => rand(1,10),
            'category_id' => rand(1,10)
        ];
    }
}
