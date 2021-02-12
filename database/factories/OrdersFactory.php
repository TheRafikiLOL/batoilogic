<?php

namespace Database\Factories;

use App\Models\Orders;
use App\Models\Dealers;
use App\Models\Customers;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Orders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $customer=Customers::inRandomOrder()->first();
        $dealer=Dealers::inRandomOrder()->first();
        return [
            'customerId' => $customer->userId,
            'dealerId' => $dealer->userId,
            'state' => $this->faker->boolean,
            'address' => $this->faker->address,
        ];
    }
}
