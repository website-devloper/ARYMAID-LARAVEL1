<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\categorie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->text(20),
            'price'=>$this->faker->numberBetween(50, 300),
            'image'=>$this->faker->image(storage_path('/app/public/productsImage')),
            'hoverImg'=>$this->faker->image(storage_path('/app/public/productsHoverImage')),
            'utilisation'=>$this->faker->sentence(),
            'description'=>$this->faker->realText($maxNbChars=30),
            'description2'=>$this->faker->realText($maxNbChars=30),
            'stock'=>$this->faker->randomNumber(),
            'categorie'=>categorie::all()->random()->type,
            'status'=>$this->faker->randomElement(["unavailable","In stock"]),
            'oldPrice'=>$this->faker->numberBetween(50, 300),
        ];
    }
}
