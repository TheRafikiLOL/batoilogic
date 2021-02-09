<?php

namespace Database\Factories;

use App\Models\OrderLines;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderLinesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderLines::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $order=Orders::inRandomOrder()->first();
        $product=Product::inRandomOrder()->first();
        return [
            'orderId' => $order->id,
            'productId' => $product->id,
            'quantity' => $this->faker->randomDigit,
            'price' => $this->faker->randomDigit,
            'discount' => $this->faker->randomDigit,
        ];
    }
}
