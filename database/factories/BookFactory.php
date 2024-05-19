<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Book;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'ASIN' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'ISBN13' => $this->faker->regexify('[A-Za-z0-9]{13}'),
            'title' => $this->faker->sentence(4),
            'author' => $this->faker->word(),
            'manufacturer' => $this->faker->word(),
            'publication_date' => $this->faker->dateTime(),
            'binding' => $this->faker->word(),
            'format' => $this->faker->word(),
        ];
    }
}
