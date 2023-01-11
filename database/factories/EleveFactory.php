<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EleveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "ine" =>"N".rand(10000000,999999999),
            "nom" =>$this->faker->lastName(),
            "prenom" =>$this->faker->firstName(),
            "date_naissance" =>$this->faker->date(),
            "lieu_naissance" =>$this->faker->text(),
            "sexe" =>$this->faker->randomElement([
                "Masculin",
                "Feminin",
            ]),
        ];
    }
}
