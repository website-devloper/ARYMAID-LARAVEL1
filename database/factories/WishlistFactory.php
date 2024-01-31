<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\produit;
use App\Models\user;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wishlist>
 */
class WishlistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'produit_id'=>produit::all()->random()->id,
            'price'=>produit::all()->random()->price,
            'status'=>$this->faker->randomElement(["unavailable","In stock"]),
            'user_id'=>user::all()->random()->id
        ];
    }
}
