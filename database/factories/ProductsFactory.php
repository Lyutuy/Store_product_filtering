<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Samsung', 'LG', 'Asus']).$this->faker->bothify('(##?#??)'),
            'matrix' => $this->faker->randomElement(['TN', 'IPS', 'AH-IPS']),
            'resolution' => $this->faker->randomElement(['1920x1080', '2560x1440', '3840x2160']),
            'frequency' => $this->faker->randomElement([60, 120, 144]),
            'diagonal' => $this->faker->randomElement([20, 23, 27]),
            'serial' => $this->faker->unique()->numberBetween($min = 1000, $max = 9999),
        ];
    }
}
