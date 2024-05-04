<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invitation>
 */
class InvitationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'email' => fake()->unique()->safeEmail(),
            'invited_date' => fake()->dateTimeBetween('-1 Week', '+1 week'),
//            'invitation_token' => fake()->regexify('[A-Za-z0-9]{20}')
            'invitation_token' => Str::random(10),
        ];
    }
}
