<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Prospect;

class ProspectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prospect::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'prospect_id' => $this->faker->randomNumber(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'page_count' => $this->faker->randomNumber(),
            'trim_size_1' => $this->faker->randomFloat(2, 0, 999999.99),
            'trim_size_2' => $this->faker->randomFloat(2, 0, 999999.99),
        ];
    }
}
