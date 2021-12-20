<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;

class UserDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $user = User::factory();
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'state' => $this->faker->state,
            'date_of_birth' => $this->faker->date
            
        ];
    }
}
