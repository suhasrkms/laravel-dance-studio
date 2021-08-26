<?php

namespace Database\Factories;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feedback::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'subject' => $this->faker->sentence(2,3),
            'message' => $this->faker->sentence(5,7),
        ];
    }
}
