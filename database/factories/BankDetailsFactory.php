<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;

class BankDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create();
        return [
            'user_id' => $user->id,
            'bank_name' => $this->faker->randomElement(['Gtbank' ,'FirstBank', 'ZenithBank']),
            'account_number' => $this->faker->numerify('###########'),
            'account_name' => $this->faker->name
            
        ];
    }
}
