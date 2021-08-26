<?php

namespace Database\Factories;

use App\Models\TeachersProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeachersProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeachersProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $styles =['Western Bharatanatyam','Western Contemporary','Contemporary Bharatanatyam','Western Contemporary Bharatanatyam','Western','Contemporary','Bharatanatyam'];
      $teacher = \App\Models\User::where('role','teacher')->inRandomOrder()->first();
      return [
          //
          'teachers_id' => $teacher->id,
          'name' => $teacher->name,
          'dp_path' => 'https://picsum.photos/800/600?random=1'. $this->faker->unique()->numberBetween(1, 50),
          'information' => $this->faker->sentence(7,10),
          'rating' => $this->faker->numberBetween(1,5),
          'style' => $this->faker->randomElement($styles),
        ];
    }
}
