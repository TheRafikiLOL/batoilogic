<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

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
     * @return array
     */
    public function definition()
    {
        $provider=Provider::inRandomOrder()->first();
        return [
            'providerId' => $provider->id,
            'name' => $this->faker->name,
            'description' => $this->faker->unique()->realText(100),
            'price' => $this->faker->randomDigit,
            'stock' => $this->faker->randomDigit,
            'photo' => $this->faker->name,
            'active' => $this->faker->boolean,
        ];
    }
}
