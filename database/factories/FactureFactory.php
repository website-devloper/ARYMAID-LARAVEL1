<?php

namespace Database\Factories;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\commande;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facture>
 */
class FactureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'EtatCommande'=>$this->faker->randomElement(["payye","non payye"]),
            'commande_id'=>commande::all()->random()->id,
            'HT'=>$this->faker->numberBetween(50,300),
            'TTC'=>$this->faker->numberBetween(100,500),
            'TVA'=>20,
            'date'=>Carbon::now()
        ];
    }
}
