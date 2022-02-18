<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\State;
use App\Models\Tour;
use App\Models\TourGroup;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        $tours = Tour::factory(250)->create();
        $tour_groups = TourGroup::factory(10)->create();
        $tour_groups_id = $tour_groups->pluck('id');

        $tours->each(function ($tour) use ($tour_groups_id){
            $tour->tour_groups()->attach(($tour_groups_id->random(2)));
            Comment::factory(3)->create(['tour_id' => $tour->id]);
            State::factory(1)->create(['tour_id' => $tour->id]);
        });
    }
}
