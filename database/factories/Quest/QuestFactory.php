<?php

namespace Database\Factories\Quest;

use App\Models\Player\Player;
use App\Models\Quest\Quest;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestFactory extends Factory
{
    protected $model = Quest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'player_id' => Player::inRandomOrder()->first()->id,
            'title' => $this->faker->title,
        ];
    }
}
