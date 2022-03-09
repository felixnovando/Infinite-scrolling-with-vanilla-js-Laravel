<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);
        $faker->addProvider(new \Bezhanov\Faker\Provider\Demographic($faker));
        return [
            'name' => $faker->productName,
            'price' => random_int(1000, 1000000)
        ];
    }
}
