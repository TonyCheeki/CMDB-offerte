<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Strs;

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
        return [
            //
            'name' => $this->faker->Name,
            'description' => $this->faker->text($maxNbChars = 50),
            'price' => $this->faker->numerify('##'),
        ];
    }
}
