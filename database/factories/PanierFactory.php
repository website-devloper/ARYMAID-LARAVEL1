<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\produit;
use App\Models\user;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Panier>
 */
class PanierFactory extends Factory
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
            'user_id'=>user::all()->random()->id,
            "PrixUnitaire"=>$this->faker->numberBetween(100,1000),
            "totalPanier"=>$this->faker->numberBetween(100,2000),
            "Quantite"=>$this->faker->randomNumber(),
        ];
    }
}
