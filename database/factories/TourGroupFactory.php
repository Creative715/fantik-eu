<?php

namespace Database\Factories;

use App\Models\TourGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TourGroup>
 */
class TourGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TourGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->realText(50);
        $slug = Str::slug($title);
        $created =  $this->faker->dateTimeBetween('-21 days', '-2 days');

        return [
            //
            'title' => $title,
            'content' => $this->faker->paragraph(100, true),
            'slug' => $slug,
            'created_at' => $created,
            'updated_at' => $created,
            'published' => 1
        ];
    }
}
