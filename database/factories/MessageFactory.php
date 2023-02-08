<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        /*
            $table->id();
            $table->string('name', 15);
            $table->string('email');
            $table->string('subject', 100);
            $table->text('text');
            $table->boolean('readed')->default(0);
            $table->timestamps();
        */
        return [
            'name' => fake()->text(15),
            'email' => fake()->unique()->safeEmail(),
            'subject' => fake()->text(100),
            'text' => fake()->text(),
            'readed' => fake()->boolean(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}