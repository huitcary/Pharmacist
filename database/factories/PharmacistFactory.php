<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PharmacistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name'=>$this->faker->lastName(),
            'first_name'=>$this->faker->firstName(),
            'address'=>$this->faker->address(),
            'assigned_company'=>$this->faker->randomElement(["The Generic Pharmacy", "Mercury Drugs", "360 Pharmacy", "Bohol Value Drug Pharmacy"]),
        ];
    }
}
