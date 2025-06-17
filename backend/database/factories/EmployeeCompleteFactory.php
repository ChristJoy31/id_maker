<?php

namespace Database\Factories;
use App\Models\EmployeeComplete;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeComplete>
 */
class EmployeeCompleteFactory extends Factory
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
            'contact' => $this->faker->phoneNumber(),
            'emergency_contact' => [
                'name' => $this->faker->name(),
                'number' => $this->faker->phoneNumber()
            ],
            'position' => $this->faker->jobTitle(),
            'employee_id' => $this->faker->unique()->numerify('EMP#####'),
            'birth_date' => $this->faker->date(),
            'qr' => null,
            'signature' => null,
            'image' => null,
        ];
    }
}
