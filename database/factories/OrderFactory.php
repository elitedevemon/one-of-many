<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      // product_name, qty, price, customer_id
      "product_name" => $this->faker->word(),
      "qty" => $this->faker->numberBetween(1, 10),
      'price' => $this->faker->numberBetween(100, 10000),
      "customer_id" => $this->faker->numberBetween(1, 100)
    ];
  }
}