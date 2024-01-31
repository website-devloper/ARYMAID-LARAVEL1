<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "Name"=>$this->faker->name(),
            "Email"=>$this->faker->safeEmail(),
          "tel"=>$this->faker->numerify('####'),
            "Msg"=>$this->faker->realText($maxNbChars=50)
        ];
    }
}
