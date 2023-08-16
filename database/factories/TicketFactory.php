<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'department_id' => $this->faker->randomNumber,
            'ticket_type' => $this->faker->word,
            'user_id' => $this->faker->randomNumber,
            'warehouse_id' => $this->faker->randomNumber,
            'location' => $this->faker->sentence,
            'category' => $this->faker->word,
            'sub_category' => $this->faker->word,
            'body' => $this->faker->sentence,
            'date_created' => $this->faker->dateTime,
            'date_completed' => $this->faker->dateTime,
            'duration' => $this->faker->randomNumber,
            'status' => $this->faker->word,
            'remark' => $this->faker->sentence,
            'closed_by' => $this->faker->name,
        ];
    }   
}
