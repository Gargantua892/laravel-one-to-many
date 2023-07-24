<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => fake() -> words(fake() -> numberBetween(1, 4), true),
            "description" => fake() -> words(fake() -> numberBetween(1, 255), true),
            "thumb" => "http://picsum.photos/350/350",
            "category" => fake() -> words(fake() -> numberBetween(1, 3), true),

        ];
    }
}
