<?php

namespace Database\Factories;
use App\Models\Complete;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complete>
 */
class CompleteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'middle_name' => $this->faker->optional()->firstName(),
            'address' => $this->faker->address(),
            'course' => $this->faker->word(),
            'student_id' => $this->faker->unique()->numerify('STU#####'),
            'contact' => $this->faker->phoneNumber(),
            'emergency_contact' => [
                'name' => $this->faker->name(),
                'number' => $this->faker->phoneNumber()
            ],
            'birth_date' => $this->faker->date(),
            'signature' => null, 
            'image' => null, 
            'qr_code' => null, 
        ];
    }
}
