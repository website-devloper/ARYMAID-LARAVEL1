<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\produit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "produit_id"=>produit::all()->random()->id,
            "firstName"=>$this->faker->name(),
            "lastName"=>$this->faker->name(),
            "email"=>$this->faker->safeEmail(),    
            "adress"=>$this->faker->streetAddress(),
            "tel"=>$this->faker->phoneNumber(10),
            "Country"=>$this->faker->title(),
            "City"=>$this->faker->title(),
            "CodePost"=>$this->faker->randomNumber(4),
            "dateCmd"=>$this->faker->date()
        ];
    }
}
