<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = Category::pluck('id')->toArray();
        $colors = Color::pluck('id')->toArray();

        return [
            'name' => fake()->word(),
            'price' => fake()->randomFloat(2),
            'category_id' => fake()->randomElement($categories),
            'color_id' => fake()->randomElement($colors),
        ];
    }
}
