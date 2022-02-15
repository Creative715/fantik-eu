<?php

namespace Database\Factories;
use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tour::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)), 0, -1);
        $created =  $this->faker->dateTimeBetween('-21 days', '-2 days');
      //  $duration = $this->faker->randomElement([1, 3, 5, 7, 10]);
        return [
            //
            'title' => $this->faker->text(30),
           // 'duration' => $duration,
            'content' => $this->faker->paragraph(100, true),
            'slug' => $slug,
            'created_at' => $created,
            'updated_at' => $created,
           // 'nights' => $this->faker->randomElement([$duration - 1, $duration]),
            'published' => 1,
            'price' => $this->faker->randomElement([1000, 2000, 3000, 5000, 10000]),
        ];
    }
}
