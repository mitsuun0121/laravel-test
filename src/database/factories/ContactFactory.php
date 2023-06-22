<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->safeEmail,
            'postcode' => $this->faker->randomNumber(8),
            'address' => $this->faker->text(10),
            'building_name' => $this->faker->text(10),
            'option' => $this->faker->text(20)
        ];
    }
}
