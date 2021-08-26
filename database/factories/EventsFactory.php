<?php

namespace Database\Factories;

use App\Models\Events;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Events::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
          'event_type' => $this->faker->randomElement(['event','class']),
          'event_name' => $this->faker->sentence(1,2),
          'event_info' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
          'date' => $this->faker->dateTimeBetween($startDate = '+1 days', $endDate = '+5 days'),
          'start_time' => $this->faker->dateTimeBetween('+0 hours', '+2 hours'),
          'end_time' => $this->faker->dateTimeBetween('+3 hours', '+10 hours'),
      ];
    }
}
