<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username'          => $this->faker->unique()->userName,
            'email'             => $this->faker->unique()->safeEmail,
            'password'          => Hash::make('password'),
            'first_name'        => $this->faker->firstName,
            'last_name'         => $this->faker->lastName,
            'phone'             => $this->faker->numerify('09########'),
            'gender'            => $this->faker->randomElement(['Male', 'Female']),
            'date_of_birth'     => $this->faker->date('Y-m-d', '2005-01-01'),
            'is_active'         => true,
            'status'            => true,
            'is_verified'       => false,
            'email_verified_at' => null,
            'last_login'        => now()->subDays(random_int(0, 30)),
            'remember_token'    => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
