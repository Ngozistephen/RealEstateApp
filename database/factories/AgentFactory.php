<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'description' => $this->faker->paragraph(3),
            'email' => $this->faker->unique()->safeEmail(),
            'birthday'=>new Carbon($this->faker->dateTime),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'phone_number' =>  $this->faker->phoneNumber(),
            'agent_company' => $this->faker->company(),
            'address' =>  $this->faker->address(),
            'twitter' =>  $this->faker->url(),
            'facebook' =>  $this->faker->url(),
            'linkedin' =>  $this->faker->url(),
            'instagram' =>  $this->faker->url(),
            'status' => Arr::random(Agent::STATUS),
        ];
    }
}
